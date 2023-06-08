

<?php
include('inc/header.php');
$msg = "";
	if(isset($_POST['submit'])){
		
		$full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user_type = $_POST['user_type'];
		$status = $_POST['status'];
		
		$sql= "INSERT INTO `users`( `full_name`, `email`, `password`, `user_type`, `status`) VALUES ('".$full_name."','".$email."','".$password."','".$user_type."','".$status."')";
		$query = $conn->query($sql);	
		
		
		if($query){
			$msg = "Data Inserted Succesfully";
		}else {
			$msg = "Data Not Inserted";
		}
	
	}
	
	
	
	if(isset($_POST['update'])){
	
		$full_name = $_POST['full_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$user_type = $_POST['user_type'];
		$status = $_POST['status'];
		
		$sql = "UPDATE `users` SET `full_name`='".$full_name."',`email`='".$email."',`password`='".$password."',`user_type`='".$user_type."',`status`='".$status."' WHERE team_id='".$team_id."'";
		$query = $conn->query($sql);
		
		
		if($query){
			$msg = "Data Updated Succesfully";
		}else {
			$msg = "Data Not Updated";
		}
	
	}
	
	if(isset($_GET['id'])){
	
		$roll_no = $_GET['id'];
		
		$sql = "select s.*, r.*, a.* from student_info s, results r, address a where s.roll_no=r.roll_no and s.roll_no=a.roll_num and s.roll_no='".$roll_no."' ";
	
		$query = $conn->query($sql);
		
		$row = $query->fetch_object();
	
	}

?>


		
		<div class="phpcoding">
		<section class="headeroption">
		<h2 style="text-align:center">Please Insert Team Information</h2>
		</section>
		<span><?php echo $msg;?></span>
		<?php if(isset($_GET['id'])){?>
		<a href="view.php">Go Back</a>
		<?php } ?>
		<section class="container">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-row row">
			<div class="form-group col-md-6">
			<label for="">Full Name:</label>
			<input type="text" name="full_name" class="form-control" value="">
			</div>
			<div class="form-group col-md-6">
			<label for="">E-mail:</label>
			<input type="text" name="email" class="form-control" value="">
			</div>
			<div class="form-group col-md-6">
			<label for="">Password:</label>
			<input type="password" name="password" class="form-control" value="">
			</div>
			<div class="form-group col-md-6">
			<label for="">User Type:</label>
			<select name="user_type" >
			<option>Admin</option>
			<option>User</option>
			</select>
			</div>
			<div class="form-group col-md-6">
			<label for="">Status:</label>
			<select name="status" >
			<option>Active</option>
			<option>InActive</option>
			</select>
			</div>
			
			
		<div class="pt-2 pb-2" align="center">

			<?php if(isset($_GET['id'])){?>
        <button  type="submit" name="update" class="btn btn-success">Update</button>

			
			<?php }else{ ?>
			<button  type="submit" name="submit" class="btn btn-success">Submit</button>
			
			<?php } ?>
			</div>
		</div>
		</form>
		</section>
<?php include('inc/footer.php');?>




<?php
include_once "dbconnect.php";
$msg = "";
	if(isset($_POST['submit'])){
		
		$team_id = $_POST['team_id'];
		$team_name = $_POST['team_name'];
		$team_category = $_POST['team_category'];
		$tournament = $_POST['tournament'];
		$team_member = $_POST['team_member'];
		$team_logo = $_POST['team_logo'];
		$team_manager = $_POST['team_manager'];
		
		$sql= "INSERT INTO `team_info`( `team_id`, `team_name`, `team_category`, `tournament`, `team_member`, `team_logo`, `team_manager`) VALUES ('".$team_id."','".$team_name."','".$team_category."','".$tournament."','".$team_member."','".$team_logo."','".$team_manager."')";
		$query = $conn->query($sql);	
		
		
		if($query){
			$msg = "Data Inserted Succesfully";
		}else {
			$msg = "Data Not Inserted";
		}
	
	}
	
	
	
	if(isset($_POST['update'])){
	
		$team_id = $_POST['team_id'];
		$team_name = $_POST['team_name'];
		$team_category = $_POST['team_category'];
		$tournament = $_POST['tournament'];
		$team_member = $_POST['team_member'];
		$team_logo = $_POST['team_logo'];
		$team_manager = $_POST['team_manager'];
		
		$sql = "UPDATE `student_info` SET `name`='".$student_name."',`roll_no`='".$student_roll."',`department`='".$student_department."',`fathers_name`='".$father_name."',`mothers_name`='".$mother_name."' WHERE roll_no='".$student_roll."'";
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

<html>

	<head>
		<title>data input</title>
		<style>
			body{font-family:<?php echo $fonts;?>}
			.phpcoding{width:900px; margin:0 auto; background:#ddd;  }
			.headeroption, .footeroption {background:#444; color:#fff; text-align:center; padding:20px;}
			.headeroption h2, .footeroption h2 {margin:0}
			.maincontent {min-height:400px; padding:20px}
		</style>
	</head>
	
	<style>
    div {
        width: 500px;
        margin: 0 auto;
        border: 1px solid #ddd;
        padding: 20px;
    }
    input{
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
    }
    input[type="submit"]{
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }
</style>
	
	<body>
		
		<div class="phpcoding">
		<section class="headeroption">
		<h2 style="text-align:center">Please Insert Team Information</h2>
		</section>
		<span><?php echo $msg;?></span>
		<?php if(isset($_GET['id'])){?>
		<a href="view.php">Go Back</a>
		<?php } ?>
		<section class="maincontent">
		<form action="" method="post">
			
			<label for="">Team ID:</label>
			<input type="text" name="team_id" value="">
			<label for="">Team Name:</label>
			<input type="text" name="team_name" value="">
			<label for="">Team Category:</label>
			<input type="text" name="team_category" value="">
			<label for="">Tournament Name:</label>
			<input type="text" name="tournament" value="">
			<label for="">Team Member:</label>
			<input type="text" name="team_member" value="">
			<label for="">Team Logo:</label>
			<input type="file" name="team_logo" value="">
			<label for="">Team Manager:</label>
			<input type="text" name="team_manager" value="">
			
			<?php if(isset($_GET['id'])){?>
			<input type="submit" name="update" value="Update">
			<?php }else{ ?>
			<input type="submit" name="submit" value="Submit">
			<?php } ?>
			
		
		</form>
		</section>
		<section class="footeroption">
				<h2>Powered by liveScore</h2>
			</section>
		</div>
	
	</body>


</html>
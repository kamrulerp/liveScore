

<?php
include('inc/header.php');
$msg = "";
	if(isset($_POST['submit'])){
		
		$type = $_POST['type'];
		$duration = $_POST['duration'];
		$overs = $_POST['overs'];
		$number_of_ball = $_POST['number_of_ball'];
		$number_of_players = $_POST['number_of_players'];
		$time = $_POST['time'];
		
		$sql= "INSERT INTO `match_type`( `type`, `duration`, `overs`, `number_of_ball`, `number_of_players`, `time`) VALUES ('".$type."','".$duration."','".$overs."','".$number_of_ball."','".$number_of_players."','".$time."')";
		$query = $conn->query($sql);	
		
		
		if($query){
			$msg = "Data Inserted Succesfully";
		}else {
			$msg = "Data Not Inserted";
		}
	
	}
	
	

	

?>


		
		<div class="phpcoding">
		<section class="headeroption">
		<h2 style="text-align:center">Please Insert Match Information</h2>
		</section>
		<span><?php echo $msg;?></span>
		<?php if(isset($_GET['id'])){?>
		<a href="view.php">Go Back</a>
		<?php } ?>
		<section class="container">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-row row">
			<div class="form-group col-md-6">
			<label for="">Match Type:</label>
			<input type="text" class="form-control" name="type" value="">
			</div>
			<div class="form-group col-md-6">
			<label for="">Match Duration:</label>
			<input type="text" name="duration" class="form-control" value="">
			</div>
			<div class="form-group col-md-6">
			<label for="">Overs:</label>
			<input type="text" name="overs" class="form-control" value="">
			</div>
			<div class="form-group col-md-6">
			<label for="">Number of Balls:</label>
			<input type="text" name="number_of_ball" class="form-control" value="">
			</div>
			<div class="form-group col-md-6">
			<label for="">Number of Players:</label>
			<input type="text" name="number_of_players" class="form-control" value="">
			</div>
			<div class="form-group col-md-6">
			<label for="">Time:</label>
			<input type="text" name="time" class="form-control" value="">
			</div>
			
			
		<div class="pt-2 pb-2">

			<button  type="submit" name="submit" class="btn btn-success">Submit</button>
			
			</div>
		</div>
		</form>
		</section>
<?php include('inc/footer.php');?>


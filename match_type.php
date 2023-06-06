

<?php
include_once "dbconnect.php";
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
	
	
	
	if(isset($_POST['update'])){
	
		$type = $_POST['type'];
		$duration = $_POST['duration'];
		$overs = $_POST['overs'];
		$number_of_ball = $_POST['number_of_ball'];
		$number_of_players = $_POST['number_of_players'];
		$time = $_POST['time'];
		
		$sql = "UPDATE `match_type` SET `type`='".$type."',`duration`='".$duration."',`overs`='".$overs."',`number_of_ball`='".$number_of_ball."',`number_of_players`='".$number_of_players."' WHERE roll_no='".$student_roll."'";
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
			
			<label for="">Match Type:</label>
			<input type="text" name="type" value="">
			<label for="">Match Duration:</label>
			<input type="text" name="duration" value="">
			<label for="">Overs:</label>
			<input type="text" name="overs" value="">
			<label for="">Number of Balls:</label>
			<input type="text" name="number_of_ball" value="">
			<label for="">Number of Players:</label>
			<input type="text" name="number_of_players" value="">
			<label for="">Match Time:</label>
			<input type="date" name="time" value="">
			
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
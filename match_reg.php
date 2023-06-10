<?php
include('inc/header.php');
$msg = "";
if (isset($_POST['submit'])) {

	$match_id = $_POST['match_id'];
	$match_name = $_POST['match_name'];
	$match_type = $_POST['match_type'];
	$team_1 = $_POST['team_1'];
	$team_2 = $_POST['team_2'];
	$venue = $_POST['venue'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$status = $_POST['status'];

	$sql = "INSERT INTO `match_registration`( `match_id`, `match_name`, `match_type`, `team_1`, `team_2`, `venue`, `date`, `time`,`status`) 
		VALUES ('" . $match_id . "','" . $match_name . "','" . $match_type . "','" . $team_1 . "','" . $team_2 . "','" . $venue . "','" . $date . "','" . $time . "','" . $status . "')";
	$query = $conn->query($sql);


	if ($query) {
		$msg = "Data Inserted Succesfully";
	} else {
		$msg = "Data Not Inserted";
	}
}



if (isset($_POST['update'])) {

	$match_id = $_POST['match_id'];
	$match_name = $_POST['match_name'];
	$match_type = $_POST['match_type'];
	$team_1 = $_POST['team_1'];
	$team_2 = $_POST['team_2'];
	$venue = $_POST['venue'];
	$status = $_POST['status'];
	$date = $_POST['date'];
	$time = $_POST['time'];

	$sql = "UPDATE `match_registration` SET `match_id`='" . $match_id . "',`match_name`='" . $match_name . "',`match_type`='" . $match_type . "',`team_1`='" . $team_1 . "',`team_2`='" . $team_2 . "',`venue`='" . $venue . "' ,`date`='" . $date . "',`time`='" . $time . "WHERE match_id='" . $match_id . "'";
	$query = $conn->query($sql);


	if ($query) {
		$msg = "Data Updated Succesfully";
	} else {
		$msg = "Data Not Updated";
	}
}



?>



<div class="phpcoding">
	<section class="headeroption">
		<h2 style="text-align:center">Please Insert Team Information</h2>
	</section>
	<span><?php echo $msg; ?></span>
	<?php if (isset($_GET['id'])) { ?>
		<a href="view.php">Go Back</a>
	<?php } ?>
	<section class="container">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-row row">
				<div class="form-group col-md-6">
					<label for="">Match ID:</label>
					<input type="text" class="form-control" name="match_id" value="">
				</div>
				<div class="form-group col-md-6">
					<label for="">Match Name:</label>
					<input type="text" name="match_name" class="form-control" value="">
				</div>
				<div class="form-group col-md-6">
					<label for="">Match Type:</label>
					<select name="match_type" class="form-control">
						<option value="">Select Match Type</option>
						<?php select('match_type', 'id', 'type', '1'); ?>
					</select>
				</div>

				<div class="form-group col-md-6">

<label for="">Mach Status:</label>
<select name="status" class="form-control" value="">
	<option value="Live">Live</option>
	<option value="Upcmg">Upcomming</option>
	<option value="Hold">Hold</option>
	<option value="End">End</option>
</select></div>









				<div class="form-group col-md-6">
					<label for="">Team 1:</label>
					<select name="team_1" class="form-control">
						<option value="">Select Team</option>
						<?php select('team_info', 'id', 'team_name', '1'); ?>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="">Team 2:</label>
					<select name="team_2" class="form-control">
						<option value="">Select Team</option>
						<?php select('team_info', 'id', 'team_name', '1'); ?>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label for="">Match Venue:</label>
					<input type="text" name="venue" class="form-control" value="">
				</div>
				<div class="form-group col-md-6">
					<label for="">Date:</label>
					<input type="date" name="date" class="form-control" value="">
				</div>
				<div class="form-group col-md-6">
					<label for="">Time:</label>
					<input type="time" name="time" class="form-control" value="">
				</div>


				<div class="pt-2 pb-2">
					<button type="submit" name="submit" class="btn btn-success">Submit</button>
				</div>

			</div>
		</form>


	</section>

	<div class="container mt-4 mb-4 pt-4 pb-4 bg-light">

		<table class="table table-bordered table-info">
			<thead>
				<tr>
					<th scope="col">SL</th>
					<th scope="col">match_id</th>
					<th scope="col">match_name</th>
					<th scope="col">match_type</th>
					<th scope="col">team_1</th>
					<th scope="col">team_2</th>
					<th scope="col">venue</th>
					<th scope="col">date</th>
					<th scope="col">time</th>
					<th scope="col">Status</th>



					<th scope="col">Action</th>



				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM match_registration";
				$query = $conn->query($sql);
				$i = 1;
				while ($row = $query->fetch_object()) {
				?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td> <?php echo $row->match_id; ?></td>
						<td> <?php echo $row->match_name; ?></td>
						<td> <?php echo $row->match_type; ?></td>
						<td> <?php echo $row->team_1; ?></td>
						<td> <?php echo $row->team_2; ?></td>
						<td> <?php echo $row->venue; ?></td>
						<td> <?php echo $row->date; ?></td>
						<td> <?php echo $row->time; ?></td>
						<td> <?php echo $row->status; ?></td>


						<td> </td>

					</tr>
				<?php
				}

				?>

			</tbody>
		</table>
	</div>


</div>








<?php include('inc/footer.php'); ?>
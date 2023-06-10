<?php
include('inc/header.php');
$msg = "";
if (isset($_POST['submit'])) {

	$team_id = $_POST['team_id'];
	$team_name = $_POST['team_name'];
	$team_category = $_POST['team_category'];
	$tournament = $_POST['tournament'];
	$team_member = $_POST['team_member'];
	$team_logo = $_POST['team_logo'];
	$team_manager = $_POST['team_manager'];

	$sql = "INSERT INTO `team_info`( `team_id`, `team_name`, `team_category`, `tournament`, `team_member`, `team_logo`, `team_manager`) VALUES ('" . $team_id . "','" . $team_name . "','" . $team_category . "','" . $tournament . "','" . $team_member . "','" . $team_logo . "','" . $team_manager . "')";
	$query = $conn->query($sql);


	if ($query) {
		$msg = "Data Inserted Succesfully";
	} else {
		$msg = "Data Not Inserted";
	}
}



if (isset($_POST['update'])) {

	$team_id = $_POST['team_id'];
	$team_name = $_POST['team_name'];
	$team_category = $_POST['team_category'];
	$tournament = $_POST['tournament'];
	$team_member = $_POST['team_member'];
	$team_logo = $_POST['team_logo'];
	$team_manager = $_POST['team_manager'];

	$sql = "UPDATE `team_info` SET `team_id`='" . $team_id . "',`team_name`='" . $team_name . "',`team_category`='" . $team_category . "',`tournament`='" . $tournament . "',`team_member`='" . $team_member . "',`team_logo`='" . $team_logo . "' ,`team_manager`='" . $team_manager . "'WHERE team_id='" . $team_id . "'";
	$query = $conn->query($sql);


	if ($query) {
		$msg = "Data Updated Succesfully";
	} else {
		$msg = "Data Not Updated";
	}
}

if (isset($_GET['id'])) {

	$roll_no = $_GET['id'];

	$sql = "select s.*, r.*, a.* from student_info s, results r, address a where s.roll_no=r.roll_no and s.roll_no=a.roll_num and s.roll_no='" . $roll_no . "' ";

	$query = $conn->query($sql);

	$row = $query->fetch_object();
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
					<label for="">Team ID:</label>
					<input type="text" class="form-control" name="team_id" value="">
				</div>
				<div class="form-group col-md-6">
					<label for="">Team Name:</label>
					<input type="text" name="team_name" class="form-control" value="">
				</div>
				<div class="form-group col-md-6">
					<label for="">Team Category:</label>
					<input type="text" name="team_category" class="form-control" value="">
				</div>
				<div class="form-group col-md-6">
					<label for="">Tournament Name:</label>
					<input type="text" name="tournament" class="form-control" value="">
				</div>
				<div class="form-group col-md-6">
					<label for="">Team Member:</label>
					<input type="text" name="team_member" class="form-control" value="">
				</div>
				<div class="form-group col-md-6">
					<label for="">Team Logo:</label>
					<input type="file" name="team_logo" class="form-control" value="">
				</div>
				<div class="form-group col-md-6">
					<label for="">Team Manager:</label>
					<input type="text" name="team_manager" class="form-control" value="">
				</div>


				<div class="pt-2 pb-2" align="center">

					<?php if (isset($_GET['id'])) { ?>
						<button type="submit" name="update" class="btn btn-success">Update</button>


					<?php } else { ?>
						<button type="submit" name="submit" class="btn btn-success">Submit</button>

					<?php } ?>
				</div>
			</div>
		</form>
	</section>

	<div class="container mt-4 mb-4 pt-4 pb-4 bg-light">

		<table class="table table-bordered table-info">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">team_id</th>
					<th scope="col">team_name</th>
					<th scope="col">team_category</th>
					<th scope="col">tournament</th>
					<th scope="col">team_member</th>

					<th scope="col">team_manager</th>
					<th scope="col">team_logo</th>
					<th scope="col">Entry By</th>
					<th scope="col">Updated</th>

				</tr>




			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM team_info";
				$query = $conn->query($sql);
				$i = 1;
				while ($row = $query->fetch_object()) {
				?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td> <?php echo $row->team_id; ?></td>
						<td> <?php echo $row->team_name; ?></td>
						<td> <?php echo $row->team_category; ?></td>
						<td> <?php echo $row->tournament; ?></td>
						<td> <?php echo $row->team_member; ?></td>

						<td> <?php echo $row->team_manager; ?></td>
						<td> <?php echo $row->team_logo; ?></td>
						<td> <?php echo $row->entry_by; ?></td>

						<td> <?php echo $row->edit_at; ?></td>



						

					</tr>
				<?php
				}

				?>

			</tbody>
		</table>
	</div>


</div>

















<?php include('inc/footer.php'); ?>
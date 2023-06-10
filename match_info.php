<?php include('inc/header.php')?>

<?php 
if (isset($_POST['submit'])) {
   $match_name = $_POST['match_name'];
   $match_type = $_POST['match_type'];
   $team_1 = $_POST['team_1'];
   $team_2 = $_POST['team_2'];

   $Venue = $_POST['Venue'];

  $sql = "INSERT INTO `match_info`( `match_name`, `match_type`, `team_1`, `team_2`) 
  VALUES ('".$match_name."','".$match_type."','".$team_1."','".$team_2."')";

if ($conn->query($sql) === TRUE) {
  echo '<div class="container alert alert-success" role="alert">
  New record created successfully</div>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

<div class="container-fulid">

    <div class="container mt-4 mb-4 bg-light">
        <h3 class="text-center">Match Information Entery</h3>

    <form action="" method="post" enctype="multipart/form-data">
  <div class="form-row row">
    <div class="form-group col-md-6">
      <label for="match_name">Match name</label>
      <input type="text" id="match_name" name="match_name" value="" class="form-control" placeholder="Full Name">
    </div>


    <div class="form-group col-md-4">
      <label for="match_type">Match Type</label>
      <select id="match_type" name="match_type" class="form-control">
        <option selected>Please selected...</option>
        <option valu="one_day">One day</option>
        <option valu="test_match">TEST Match</option>
      </select>
    </div>

        <div class="form-group col-md-4">
        <label for="team_1">Team 1</label>
        <input type="text" id="team_1" name="team_1" value=""  class="team_1" >
        </div>

        <div class="form-group col-md-4">
        <label for="team_1">Teams 2</label>
        <input type="text" id="team_2" name="team_2" value=""  class="form-control" placeholder="team_2">
        </div>

        <div class="form-group col-md-4">
        <label for="Venue">Venue </label>
        <input type="text" id="Venue" name="Venue" value=""  class="form-control" placeholder="Venue">
        </div>



  </div>

    <div class="pt-2 pb-2" align="center">
        <button  type="submit" name="submit" class="btn btn-success d-flax">submit</button>
    </div>
</form>

    </div>

    <div class="container mt-4 mb-4 pt-4 pb-4 bg-light">

    <table class="table table-bordered table-info">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Match name</th>
      <th scope="col">Match Type</th>
      <th scope="col">Team 1 </th>
      <th scope="col">Team 2</th>
      <th scope="col">Venue </th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
$sql = "SELECT * FROM match_info";
$query = $conn->query($sql);
$i=1;
while($row = $query->fetch_object()){
?>
     <tr>
      <td><?php echo $i++;?></td>
      <td> <?php echo $row->match_id;?></td>
      <td> <?php echo $row->match_name;?></td>
      <td> <?php echo $row->match_type;?></td>
      <td> <?php echo $row->team_1;?></td>
      <td> <?php echo $row->team_2;?></td>
      <td> </td>

    </tr>
<?php
}

?>

  </tbody>
</table>
  </div>


</div>








<?php include('inc/footer.php');?>
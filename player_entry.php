<?php include('inc/header.php')?>

<?php 
if (isset($_POST['submit'])) {
   $full_name = $_POST['full_Name'];
   $nick_name = $_POST['nick_name'];
   $born_place = $_POST['born_place'];
   $birth_date = $_POST['birth_date'];

   $player_gender = $_POST['player_gender'];
   $player_image = $_POST['player_image'];
   $player_teams = $_POST['player_teams'];
   $nationality = $_POST['nationality'];
  
   $playing_role = $_POST['playing_role'];
   $batting_style = $_POST['batting_style'];
   $bowling_style = $_POST['bowling_style'];
   
  // image file upload
  if($_FILES['player_image']['name']){
   // check file type
    $allowed = array('jpg','jpeg','png'); 
    $filename = $_FILES['player_image']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext,$allowed)) {
      echo '<div class="container alert alert-danger" role="alert">
      <strong>Warning!</strong> Only jpg, jpeg, png file are allowed.</div>';
    }else{
      $player_image = $_FILES['player_image']['name'];
      $player_image_tmp = $_FILES['player_image']['tmp_name'];
      $new_name = time().$player_image;
      move_uploaded_file($new_name,"img/$player_image");
    }
    
  }


  $sql = "INSERT INTO `player_info`( `full_name`, `nick_name`, `player_born`, `player_birthday`, `player_gender`, `player_nationality`, `player_img`, `playing_role`, `batting_style`, `bowling_style`, `player_team_name`) 
  VALUES ('".$full_name."','".$nick_name."','".$born_place."','".$birth_date."','".$player_gender."','".$nationality."','".$new_name."','".$playing_role."','".$batting_style."','".$bowling_style."','".$player_teams."')";

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
        <h3 class="text-center">PLayer Information Entery</h3>

    <form action="" method="post" enctype="multipart/form-data">
  <div class="form-row row">
    <div class="form-group col-md-6">
      <label for="full_Name">Full Name</label>
      <input type="text" id="full_Name" name="full_Name" value="" class="form-control" placeholder="Full Name">
    </div>
    <div class="form-group col-md-6">
      <label for="nick_name">Nick Name</label>
      <input type="text" id="nick_name" name="nick_name" value="" class="form-control"  placeholder="Nick Name">
    </div>

    <div class="form-group col-md-4">
        <label for="born_place">Player Born Place </label>
        <input type="text" id="born_place" name="born_place" value=""  class="form-control" placeholder="Player Born Place">
    </div>
    <div class="form-group col-md-4">
        <label for="birth_date">Date of Birth</label>
        <input type="Date" id="birth_date" name="birth_date" value=""  class="form-control" placeholder="00-00-0000">
    </div>
    <div class="form-group col-md-4">
      <label for="player_gender">Player Gender</label>
      <select id="player_gender" name="player_gender" class="form-control">
        <option selected>Please selected...</option>
        <option valu="Male">Male</option>
        <option valu="Female">Female</option>
      </select>
    </div>

        <div class="form-group col-md-4">
        <label for="player_image">Player Image</label>
        <input type="file" id="player_image" name="player_image" value=""  class="form-control" >
        </div>

        <div class="form-group col-md-4">
        <label for="player_teams">Player Teams</label>
        <input type="text" id="player_teams" name="player_teams" value=""  class="form-control" placeholder="Player Teams">
        </div>

        <div class="form-group col-md-4">
        <label for="nationality">Player Nationality </label>
        <input type="text" id="nationality" name="nationality" value=""  class="form-control" placeholder="Nationality">
        </div>

        <div class="form-group col-md-4">
            <label for="playing_role">Player Role</label>
            <select id="playing_role" name="playing_role" class="form-control">
                <option selected>Please selected...</option>
                <option valu="allrounder">All Rounder</option>
                <option valu="batting">Batting</option>
                <option valu="bowling">Bowling</option>
            </select>
        </div>


        
    <div class="form-group col-md-4">
      <label for="batting_style">Batting Style</label>
      <select id="batting_style" name="batting_style" class="form-control">
        <option selected>Please selected...</option>
        <option valu="Left Hand Bat">Left Hand Bat</option>
        <option valu="Right Hand Bat">Right Hand Bat</option>
      </select>
    </div>

    

    <div class="form-group col-md-4">
      <label for="bowling_style">Bowling Style</label>
      <select id="bowling_style" name="bowling_style" class="form-control">
        <option selected>Please selected...</option>
        <option valu="Left Atm Offbrack">Left Atm Offbrack</option>
        <option valu="Right Atm Offbrack">Right Atm Offbrack</option>
      </select>
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
      <th scope="col">Player Id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Nick Name</th>
      <th scope="col">Player Born Place</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Player Gender</th>
      <th scope="col">Player Image</th>
      <th scope="col">Player Teams</th>
      <th scope="col">Player Nationality</th>
      <th scope="col">Player Role</th>
      <th scope="col">Batting Style</th>
      <th scope="col">Bowling Style</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
$sql = "SELECT * FROM player_info";
$query = $conn->query($sql);
$i=1;
while($row = $query->fetch_object()){
?>
     <tr>
      <td><?php echo $i++;?></td>
      <td> <?php echo $row->player_id;?></td>
      <td> <?php echo $row->full_name;?></td>
      <td> <?php echo $row->nick_name;?></td>
      <td> <?php echo $row->player_born;?></td>
      <td> <?php echo $row->player_birthday;?></td>
      <td> <?php echo $row->player_gender;?></td>

      <td> <?php echo $row->player_img;?></td>


      <td> <?php echo $row->player_team_name;?></td>
      <td> <?php echo $row->player_nationality;?></td>
      <td> <?php echo $row->playing_role;?></td>
      <td> <?php echo $row->batting_style;?></td>
      <td> <?php echo $row->bowling_style;?></td>
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
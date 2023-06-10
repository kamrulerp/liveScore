<?php
include "inc/header.php";
$msg = "";
if (isset($_POST['submit'])) {

    $tornament_id = $_POST['tornament_id'];
    $match_id = $_POST['match_id'];
    $innings = $_POST['innings'];
    $boll_Status = $_POST['boll_Status'];
    $boll_no = $_POST['boll_no'];
    $over_no = $_POST['over_no'];

    $wickets_type = $_POST['wickets_type'];
    $boller_id = $_POST['boller_id'];
    $bter_id = $_POST['bter_id'];
    $ttl_runs = $_POST['ttl_runs'];
    $extra_run = $_POST['extra_run'];
    $bowandari = $_POST['bowandari'];
    $bouncer = $_POST['bouncer'];
    $entry_by = $_POST['entry_by'];


    $sql = "INSERT INTO `ball_dump` (`tornament_id`, `match_id`, `innings`, `boll_Status`, `boll_no`, `over_no`, `wickets_type`, `boller_id`,
    `bter_id`, `ttl_runs`, `extra_run`, `bowandari`, `bouncer`, `entry_by`)
    VALUES ('" . $tornament_id . "','" . $match_id . "','" . $innings . "','" . $boll_Status . "','" . $boll_no . "','" . $over_no . "','" . $wickets_type . "',
    '" . $boller_id . "','" . $bter_id . "',
    '" . $ttl_runs . "','" . $extra_run . "','" . $bowandari . "','" . $bouncer . "','" . $entry_by . "')";

    $query = $conn->query($sql);
    if ($query) {
        echo "<script>
        alert('Data is inserted!');
        </script>";
    } else {
        echo "<script>
        alert('Data is inserted!');
        </script>";
    }
}



if (isset($_POST['update'])) {

    $type = $_POST['type'];
    $duration = $_POST['duration'];
    $overs = $_POST['overs'];
    $number_of_ball = $_POST['number_of_ball'];
    $number_of_players = $_POST['number_of_players'];
    $time = $_POST['time'];

    $sql = "UPDATE `match_type` SET `type`='" . $type . "',`duration`='" . $duration . "',`overs`='" . $overs . "',`number_of_ball`='" . $number_of_ball . "',`number_of_players`='" . $number_of_players . "' WHERE roll_no='" . $student_roll . "'";
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



    <div class="container">
        <div class="col">
           
            <div class="container-fulid">
    <div class="container mt-4 mb-4 bg-light">
                <br><h2 style="text-align:center ">Continuous Ball Information</h2> 
        
            <span><?php echo $msg; ?></span>
            <?php if (isset($_GET['id'])) { ?>
                <a href="view.php">Go Back</a>
            <?php } ?>




            <div class="container-fulid">
                <div class="container mt-8 mb-8 bg-light">


                    <form action="" method="post">


                        <div class="form-row row">


                            <div class="form-group col-md-6">

                                <label for="">Tornament Id:</label>
                                <input type="number" name="tornament_id" class="form-control" value="" required>
                            </div>

                            <div class="form-group col-md-6">

                                <label for="">Match Id :</label>
                                <input type="text" name="match_id" class="form-control" value="" required>
                                </div>

    <div class="form-group col-md-6">


                                <label for="">Innings:</label>
                                <select name="innings" class="form-control" value="">
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                </select></div>

<div class="form-group col-md-6">

                                <label for="">Ball Status:</label>
                                <select name="boll_Status" class="form-control" value="">
                                    <option value="y">Yes</option>
                                    <option value="n">No</option>
                                </select></div>

<div class="form-group col-md-6">



                                <label for="">Ball No:</label>
                                <select name="boll_no" class="form-control" value="">
                                    <option value="1">1st</option>
                                    <option value="2">2nd</option>
                                    <option value="3">3rd</option>
                                    <option value="4">4rth</option>
                                    <option value="5">5th</option>
                                    <option value="6">last</option>
                                </select></div>

<div class="form-group col-md-6">
                                <label for="">Over No:</label>
                                <input type="number" name="over_no" max="50" class="form-control" value="" required></div>

<div class="form-group col-md-6">

                                <label for="">Wickets Type:</label>
                                <select name="wickets_type" class="form-control" value="">
                                    <option value="no">No</option>
                                    <option value="catch">Catch</option>
                                    <option value="Bold">Bold</option>
                                    <option value="RunOut">Run Out</option>
                                </select></div>

<div class="form-group col-md-6">


                                <label for="">Boller Id:</label>
                                <input type="number" name="boller_id" class="form-control" required value=""></div>

<div class="form-group col-md-6">


                                <label for="">Bater Id:</label>
                                <input type="number" name="bter_id" class="form-control" value="" required></div>

<div class="form-group col-md-6">



                                <label for="">Totel Run In this Ball:</label>
                                <input type="number" name="ttl_runs" max="20" class="form-control" value="" required></div>

<div class="form-group col-md-6">


                                <label for="">Extra Runs:</label>
                                <input type="number" name="extra_run" max="10" class="form-control" required value=""></div>

<div class="form-group col-md-6">




                                <label for="">Bawandari:</label>
                                <select name="bowandari" class="form-control" value="">
                                    <option value="0">No</option>
                                    <option value="4">Four</option>
                                    <option value="6">Six</option>
                                </select></div>

<div class="form-group col-md-6">

                                <label for="">Bouncer:</label>
                                <select name="bouncer" class="form-control" value="">
                                    <option value="0">No</option>
                                    <option value="1">One Bounce</option>
                                </select></div>

<div class="form-group col-md-6">


                                <label for="">Entry BY:</label>
                                <input type="number" name="entry_by" class="form-control" value="" required>
            </div>
	
	    <div class="pt-2 pb-2" align="center">

                                <?php if (isset($_GET['id'])) { ?>
                                    <input type="submit" name="update" value="Update">
                                <?php } else { ?>
                                    <input type="submit" class="btn btn-success d-flax " name="submit" value="Submit">
                                <?php } ?>


                    </form>
                </div>
                </section>
                </div>
</div>
</div>
<div class="container mt-4 mb-4 pt-4 pb-4 bg-light">

    <table class="table table-bordered table-info">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Ball id </th>
      <th scope="col">Tornament id</th>
      <th scope="col">Match id</th>
      <th scope="col">Innings</th>
      <th scope="col">Ball Status</th>
      <th scope="col">Boll no</th>
      <th scope="col">Over no</th>
      <th scope="col">Wickets Type</th>
      <th scope="col">Boller id</th>
      <th scope="col">Bter id</th>
      <th scope="col">Total Runs</th>
      <th scope="col">Extra Runs</th>
      <th scope="col">Bowandari</th>
      <th scope="col">Bouncer</th>
      <th scope="col">Entry By</th>
      <th scope="col">Entry At</th>

      <th scope="col">Action</th>

    









    </tr>
  </thead>
  <tbody>
<?php 
$sql = "SELECT * FROM ball_dump";
$query = $conn->query($sql);
$i=1;
while($row = $query->fetch_object()){
?>
     <tr>
      <td><?php echo $i++;?></td>
      <td> <?php echo $row->ball_id;?></td>
      <td> <?php echo $row->tornament_id;?></td>
      <td> <?php echo $row->match_id;?></td>
      <td> <?php echo $row->innings;?></td>
      <td> <?php echo $row->boll_Status;?></td>
      <td> <?php echo $row->boll_no;?></td>
      <td> <?php echo $row->over_no;?></td>

      <td> <?php echo $row->wickets_type;?></td>


      <td> <?php echo $row->boller_id;?></td>
      <td> <?php echo $row->bter_id;?></td>
      <td> <?php echo $row->ttl_runs;?></td>
      <td> <?php echo $row->extra_run;?></td>
      
      <td> <?php echo $row->bowandari;?></td>
      <td> <?php echo $row->bouncer;?></td>
      <td> <?php echo $row->entry_by;?></td>
      <td> <?php echo $row->entry_at;?></td>

      <td> </td>

    







    </tr>
<?php
}

?>

  </tbody>
</table>
  </div>


</div>


</div>
</div>
</div>

<script>
    function myFunction() {
        alert("data inserted");
    }
</script>
<?php include "inc/footer.php"; ?>







<script>
$(document).ready(function () {
    $('#example').DataTable();
});


</script>
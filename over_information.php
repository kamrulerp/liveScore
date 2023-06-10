<?php include('inc/header.php')?>

<?php

if(isset($_POST['submit'])){

$over_no = $_POST['over_no'];
$Over_Bowl = $_POST['Over_Bowl'];
$Over_Ran = $_POST['Over_Ran'];
$Over_Wicket = $_POST['Over_Wicket'];
$Bowler_Name = $_POST['Bowler_Name'];
$Bowler_Id = $_POST['Bowler_Id'];
$Status = $_POST['Status'];
$Entry_at = $_POST['Entry_at'];
$Entry_by = $_POST['Entry_by'];
$Edit_at = $_POST['Edit_at'];
$edit_by = $_POST['edit_by'];
$team_name = $_POST['team_name'];

$sql = "INSERT INTO `over_info` (`over_no`,`over_bowl`,`over_ran`,`over_wicket`,`bowler_name`,`bowler_id`,`status`,`entry_at`,`entry_by`,`edit_at`,`edit_by`) 

VALUES ('".$over_no."','".$Over_Bowl."','".$Over_Ran."','".$Over_Wicket."','".$Bowler_Name."','".$Bowler_Id."','".$Status."','".$Entry_at."','".$Entry_by."',
  '".$Edit_at."','".$edit_by."','".$team_name."')";
  

$query =$conn->$query($aql);
if($query){
echo"data is insert";
}
else{
echo"data is not insert";
}





}

?>
 

   <div class="container-fulid">
    <div class="container mt-4 mb-4 bg-light">
        <h3 class="text-center">Over  Information </h3>

    <form>
  <div class="form-row row">


    <div class="form-group col-md-6">
      <label for="full_Name">Over No</label>
      <input type="text" class="form-control" id="Over_No" placeholder="">
    </div>

    <div class="form-group col-md-6">

      <label for="Nick_Name">Over Bowl</label>
      <input type="text" class="form-control" id="Over_Bowl" placeholder="">
    </div>




	
   <div class="form-group col-md-6">
      <label for="Nick_Name">Over Ran</label>
      <input type="text" class="form-control" id="Over_Ran" placeholder="">
    </div>
    
	<div class="form-group col-md-6">
      <label for="Nick_Name">Over Wicket</label>
      <input type="text" class="form-control" id="Over_Wicket" placeholder="">
    </div>
	
	<div class="form-group col-md-6">
      <label for="Nick_Name">Bowler Name</label>
      <select id="inputState1" class="form-control">
                <option></option>
                <option>A</option>
                <option>B</option>
				<option>C</option>
            </select>
    </div>
	<div class="form-group col-md-6">
      <label for="Nick_Name">Bowler Id</label>
      <input type="text" class="form-control" id="Bowler_Id" placeholder="">
    </div>

  <div class="form-group col-md-6">
      <label for="Nick_Name">Status</label>
      <input type="text" class="form-control" id="Status" placeholder="">
    </div>
	
	<div class="form-group col-md-6">
      <label for="Nick_Name">team name</label>
       <select id="inputState1" class="form-control">
                <option></option>
                <option>A</option>
                <option>B</option>
				<option>C</option>
            </select>
     </div>
	
	    <div class="pt-2 pb-2" align="center">
        <button  type="submit" class="btn btn-success d-flax">submit</button>
      </div>
</div>




<div class="container mt-4 mb-4 pt-4 pb-4 bg-light">

<table class="table table-bordered table-info">
<thead>
<tr>
<th scope="col">SL</th>
  <th scope="col">over_no</th>
  <th scope="col">over_bowl</th>
  <th scope="col">over_ran</th>
  <th scope="col">over_wicket</th>
  <th scope="col">bowler_name</th>
  <th scope="col">bowler_id</th>
  <th scope="col">status</th>
  <th scope="col">team_name</th>
  <th scope="col">entry_by</th>
  <th scope="col">entry_at</th>
  <th scope="col">action</th>










</tr>
</thead>
<tbody>
<?php 
$sql = "SELECT * FROM over_info";
$query = $conn->query($sql);
$i=1;
while($row = $query->fetch_object()){
?>
 <tr>
  <td><?php echo $i++;?></td>
  <td> <?php echo $row->over_no;?></td>
  <td> <?php echo $row->over_bowl;?></td>
  <td> <?php echo $row->team_ran;?></td>
  <td> <?php echo $row->over_wicket;?></td>
  <td> <?php echo $row->bowler_name;?></td>
  <td> <?php echo $row->bowler_id;?></td>
  <td> <?php echo $row->status;?></td>
  <td> <?php echo $row->team_name;?></td>
  <td> <?php echo $row->entry_bt;?></td>
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













<?php include('inc/footer.php');?>
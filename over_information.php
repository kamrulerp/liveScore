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

$sql = "INSERT INTO `over_info` (`over_no`,`Over_Bowl`,`Over_Ran`,`Over_Wicket`,`Bowler_Name`,`Bowler_Id`,`Status`,`Entry_at`,`Entry_by`,`Edit_at`,`edit_by`) 

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

abc

<?php include('inc/footer.php');?>
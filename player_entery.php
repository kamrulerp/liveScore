<?php include('inc/header.php')?>

<div class="container-fulid">

    <div class="container mt-4 mb-4 bg-light">
        <h3 class="text-center">PLayer Information Entery</h3>

    <form>
  <div class="form-row row">
    <div class="form-group col-md-6">
      <label for="full_Name">Full Name</label>
      <input type="text" class="form-control" id="full_Name" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="Nick_Name">Nick Name</label>
      <input type="text" class="form-control" id="Nick_Name" placeholder="">
    </div>

    <div class="form-group col-md-4">
        <label for="Place">Player Born Place </label>
        <input type="text" class="form-control" id="Place" placeholder="">
    </div>
    <div class="form-group col-md-4">
        <label for="date">Date of Birth</label>
        <input type="Date" class="form-control" id="date" >
    </div>
    <div class="form-group col-md-4">
      <label for="inputState3">Player Gender</label>
      <select id="inputState3" class="form-control">
        <option selected>Please selected...</option>
        <option valu="M">Male</option>
        <option valu="F">Female</option>
      </select>
    </div>

        <div class="form-group col-md-4">
        <label for="Image">Player Image</label>
        <input type="file" class="form-control" id="Image">
        </div>

        <div class="form-group col-md-4">
        <label for="inputZip">Player Teams</label>
        <input type="text" class="form-control" id="inputZip">
        </div>

        <div class="form-group col-md-4">
        <label for="inputZip">Player Nationality </label>
        <input type="text" class="form-control" id="inputZip">
        </div>

        <div class="form-group col-md-4">
            <label for="inputState1">Player Role</label>
            <select id="inputState1" class="form-control">
                <option selected>Please selected...</option>
                <option valu="allrounder">All Rounder</option>
                <option valu="batting">Batting</option>
                <option valu="bowling">Bowling</option>
            </select>
        </div>


        
    <div class="form-group col-md-4">
      <label for="inputState2">Batting Style</label>
      <select id="inputState2" class="form-control">
        <option selected>Please selected...</option>
        <option valu="1">Left Hand Bat</option>
        <option valu="2">Right Hand Bat</option>
      </select>
    </div>

    

    <div class="form-group col-md-4">
      <label for="inputState3">Bowling Style</label>
      <select id="inputState3" class="form-control">
        <option selected>Please selected...</option>
        <option valu="batting">Left Atm Offbrack</option>
        <option valu="allrounder">Right Atm Offbrack</option>
      </select>
    </div>

  </div>

    <div class="pt-2 pb-2" align="center">
        <button  type="submit" class="btn btn-success d-flax">submit</button>
    </div>
</form>



    </div>

</div>








<?php include('inc/footer.php');?>
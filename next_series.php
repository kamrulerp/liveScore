<?php 
$page = 'futcher'; 
include('inc/header.php');
include('inc/sub_menu.php');
 ?>



<div class="container">

    <div class="season_tabs">
    
   <div class="season_tab">
       <input type="radio" id="tab-1" name="tab-group-1" checked>
       <label for="tab-1">International Cricket </label>
       
       <div class="season_content">

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Month</th>
        <th scope="col">Series Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM `match_registration` WHERE `match_category` = 'International'";
      $query = $conn->query($sql);
      while($row = $query->fetch_object()){
      ?>
      <tr>
        <td class="fw-bold"><?php echo date('F',strtotime($row->date)); ?> <?php echo date('Y',strtotime($row->date)); ?></td>
        <td>
          <div class="container">
              <p class="m-0 fw-bold"><?php echo $row->match_name; ?>, <?php echo date('Y',strtotime($row->date)); ?></p>
              <span> <?php echo one_col('match_type','duration',"id = $row->match_type"); ?></span>
          </div>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>


       </div> 
   </div>
    
   <div class="season_tab">
       <input type="radio" id="tab-2" name="tab-group-1">
       <label for="tab-2">Domestic Cricket</label>
       
       <div class="season_content">
   
       <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Month</th>
        <th scope="col">Series Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM `match_registration` WHERE `match_category` = 'Domestic'";
      $query = $conn->query($sql);
      while($row = $query->fetch_object()){
      ?>
      <tr>
        <td class="fw-bold"><?php echo date('F',strtotime($row->date)); ?> <?php echo date('Y',strtotime($row->date)); ?></td>
        <td>
          <div class="container">
              <p class="m-0 fw-bold"><?php echo $row->match_name; ?>, <?php echo date('Y',strtotime($row->date)); ?></p>
              <span> <?php echo one_col('match_type','duration',"id = $row->match_type"); ?></span>
          </div>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
       </div> 
   </div>
    
    <div class="season_tab">
       <input type="radio" id="tab-3" name="tab-group-1">
       <label for="tab-3">League Cricket</label>
     
       <div class="season_content">


  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Month</th>
        <th scope="col">Series Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM `match_registration` WHERE `match_category` = 'League'";
      $query = $conn->query($sql);
      while($row = $query->fetch_object()){
      ?>
      <tr>
        <td class="fw-bold"><?php echo date('F',strtotime($row->date)); ?> <?php echo date('Y',strtotime($row->date)); ?></td>
        <td>
          <div class="container">
              <p class="m-0 fw-bold"><?php echo $row->match_name; ?>, <?php echo date('Y',strtotime($row->date)); ?></p>
              <span> <?php echo one_col('match_type','duration',"id = $row->match_type"); ?></span>
          </div>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

       </div> 
   </div>
      
   </div>
</div>

</div>





<?php include('inc/footer.php');?>
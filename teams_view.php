<?php 
    $page = 'teams'; 
    include('inc/header.php');
    include('inc/sub_menu.php');
 ?>



<div class="container">

    <div class="season_tabs">
    
   <div class="season_tab">
       <input type="radio" id="tab-1" name="tab-group-1" checked>
       <label for="tab-1">International Cricket Team</label>
       
       <div class="season_content">
        <?php 
            $sql = "SELECT * FROM team_info ";
            $query = $conn->query($sql);
            while($row = $query->fetch_object()){
        ?>
            <div class="chip m-2">
                <img src="img/flag.jpg" alt="Person" width="96" height="96">
                 <?php echo $row->team_name;?>
            </div>
        <?php } ?>        
       </div> 
   </div>
    
   <div class="season_tab">
       <input type="radio" id="tab-2" name="tab-group-1">
       <label for="tab-2">Domestic Cricket Team</label>
       
       <div class="season_content">
       <div class="chip m-2">
                <img src="img/flag.jpg" alt="Person" width="96" height="96">
                Bangladesh
            </div>

            <div class="chip m-2">
                <img src="img/flag.jpg" alt="Person" width="96" height="96">
                India
            </div>
       </div> 
   </div>
    
    <div class="season_tab">
       <input type="radio" id="tab-3" name="tab-group-1">
       <label for="tab-3">League Cricket Team</label>
     
       <div class="season_content">

            <div class="chip m-2">
                <img src="img/flag.jpg" alt="Person" width="96" height="96">
                India
            </div>
       </div> 
   </div>
      
   </div>
</div>

</div>






<?php include('inc/footer.php');?>
<?php 
$page = 'live'; 
include('inc/header.php');
include('inc/sub_menu.php');
 ?>


<div class="container">

    <div class="season_tabs">
    
   <div class="season_tab">
       <input type="radio" id="tab-1" name="tab-group-1" checked>
       <label for="tab-1">Live</label>
       
       <div class="season_content">

       <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Month</th>
      <th scope="col">Series Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="fw-bold">June 2023</td>
      <td>
        <div class="container">
            <p class="m-0 fw-bold">Afghanistan tour of sri Lanka, 2023</p>
            <span> Jun 02 - Jun 07</span>
        </div>

        <div class="container">
            <p class="m-0 fw-bold">West Indies tour of UAE, 2023</p>
            <span> Jun 04 - Jun 09</span>
        </div>

      </td>
    </tr>
    <tr>
      <td class="fw-bold">July 2023</td>
      <td>
        <div class="container">
            <p class="m-0 fw-bold">ICC Mens T20 World Cup Europe Qualifier 2023</p>
            <span> July 02 - July 07</span>
        </div>

      </td>
    </tr>
    <tr>
      <td class="fw-bold">August 2023</td>
      <td>
        <div class="container">
            <p class="m-0 fw-bold">ICC Mens T20 World Cup Europe Qualifier 2023</p>
            <span> August 02 - August 07</span>
        </div>

      </td>
    </tr>

  </tbody>
</table>


       </div> 
   </div>
    
   <div class="season_tab">
       <input type="radio" id="tab-2" name="tab-group-1">
       <label for="tab-2">Recent</label>
       
       <div class="season_content">
   
       <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Month</th>
      <th scope="col">Series Name</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="fw-bold">June 2023</td>
      <td>
        <div class="container">
            <p class="m-0 fw-bold">Afghanistan tour of sri Lanka, 2023</p>
            <span> Jun 02 - Jun 07</span>
        </div>


      </td>
    </tr>
    <tr>
    <tr>
      <td class="fw-bold">August 2023</td>
      <td>
        <div class="container">
            <p class="m-0 fw-bold">ICC Mens T20 World Cup Europe Qualifier 2023</p>
            <span> August 02 - August 07</span>
        </div>

      </td>
    </tr>

  </tbody>
</table>
       </div> 
   </div>
    
    <div class="season_tab">
       <input type="radio" id="tab-3" name="tab-group-1">
       <label for="tab-3">Upcoming</label>
     
       <div class="season_content">


       <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Month</th>
      <th scope="col">Series Name</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <td class="fw-bold">August 2023</td>
      <td>
        <div class="container">
            <p class="m-0 fw-bold">ICC Mens T20 World Cup Europe Qualifier 2023</p>
            <span> August 02 - August 07</span>
        </div>

      </td>
    </tr>

  </tbody>
</table>
       </div> 
   </div>
      
   </div>
</div>

</div>








<?php include('inc/footer.php');?>
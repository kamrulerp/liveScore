<?php include('inc/header.php')?>
        <section class="mt-0">
            <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/slide/1.png" class="d-block w-100 custom-height" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/slide/2.png" class="d-block w-100 custom-height" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/slide/3.png" class="d-block w-100 custom-height" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/slide/4.png" class="d-block w-100 custom-height" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/slide/5.png" class="d-block w-100 custom-height" alt="...">
                </div>
                <div class="carousel-item">
                <img src="img/slide/6.png" class="d-block w-100 custom-height" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </section>    

        <section class="container pt-5 pb-5">
            <div class="row">
               <?php
               $sql = "SELECT * FROM match_registration m WHERE STATUS in ('Live','Upcmg')";
                // $sql = "SELECT m.*  FROM match_registration m where 1";
                $result = $conn->query($sql);
                while($row = $result->fetch_object()){
               ?> 
                <div class="col-sm-4">
                    
                    <a href="commentary.php" class="text-decoration-none">
                    <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <p class="card-test sm">
                                    <?php echo $row->match_name; ?> - Venue : <?php echo $row->venue; ?>  
                                </p>
                            </div>
                            <div class="col-sm-3">
                            <?php $stat=$row->status; 
if ($stat=='Live') { ?>

                                <span class="badge bg-danger text-right"><?php echo $row->status;?></span>
<?php  }else{ ?>
    <span class="badge bg-warning text-right"><?php echo $row->status;?></span>
<?php } ?>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p class="card-test sm">
                                    <?php echo one_col('team_info','team_name',"id = $row->team_1"); ?>
                                </p>
                            </div>
                            <div class="col-sm-6">
                                
                            <?php $stat=$row->status; 
if ($stat=='Live') { ?>
                                <p class="card-test sm">
                                    150 & 20-8  
                                </p>
<?php  }else{ ?>
                                <p class="card-test sm">
                                comming soon
                                </p>
<?php } ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="card-test sm">
                                <?php echo one_col('team_info','team_name',"id = $row->team_2"); ?>  
                                </p>
                            </div>
                            <div class="col-sm-6">
                                
                            <?php $stat=$row->status; 
if ($stat=='Live') { ?>
                                <p class="card-test sm">
                                    90 & 15-4  
                                </p>
<?php  }else{ ?>
                                <p class="card-test sm">
                                   comming soon
                                </p>
<?php } ?>
                            </div>
                        </div>
                        
                        <small class="text-danger">Date: <?php echo $row->date?> Time: <?php echo $row->time?></small>
                        
                    </div>
                    </div>
                    </a>
                </div>

            <?php } ?>


                
                
            </div>
        </section>
        <section class="container pt-2 pb-2">
            <div class="row">
                <div class="col-sm-3 row bg-color1 pt-3 pb-3">
                    <h4 class="text-center">LATEST NEWS</h4>

                    <div class="container">
                        <a class="p-0">'Still too early to make any prediction': Thakur presents optimistic front</a>
                        <span>12h ago</span>
                            <hr>
                    </div>

                    <div class="container">
                        <a class="p-0">Zimbabwe's happy days almost here again</a>
                        <span>23h ago</span>
                            <hr>
                    </div>

                    <div class="container">
                        <a class="p-0">No plan to shift 2024 Men's T20 World Cup from WI, US: ICC</a>
                        <span>1day ago</span>
                            <hr>
                    </div>

                    <div class="container">
                        <a class="p-0">Middlesex choke to eighth straight loss</a>
                        <span>1day ago</span>
                            <hr>
                    </div>

                    <div class="container">
                        <a class="p-0">Studious Smith transcends conditions yet again</a>
                        <span>1day ago</span>
                            <hr>
                    </div>
                    

                </div>
                <div class="col-sm-9 row bg-color1 pt-3 pb-3">

                    <div class="container">
                        <img src="img/00.jpg" alt="" srcset="" class="w-100 h-70">
                        <h3>Bangladesh vs India Semi Final: Six ingredients for success</h3>
                        <p>On 15th June, 2017 Bangladesh face a familiar opposition. 
                            An opposition that knows the strengths and weaknesses of Bangladesh fully and an adversary
                            <span class="text-danger">read more...</span>
                        </p>


                    </div>
                    <div class="container">
                        <img src="img/01.jpg" alt="" srcset="" class="w-100 h-70">
                        <h3>Australia dent India with Rohit, Pujara wickets</h3>
                        <p>Australia declared at 270-8, leaving India a record 444 to win the summit clash
                            <span class="text-danger">read more...</span>
                        </p>


                    </div>

                </div>


            </div>
        </section>
    </div>

<?php include('inc/footer.php');?>

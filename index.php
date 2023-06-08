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
                $sql = "SELECT m.*  FROM match_registration m where 1";
                $result = $conn->query($sql);
                while($row = $result->fetch_object()){
               ?> 
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <p class="card-test sm">
                                    <?php echo $row->match_name; ?> - Venue : <?php echo $row->venue; ?>  
                                </p>
                            </div>
                            <div class="col-sm-3">
                                <span class="badge bg-danger text-right"><?php echo $row->status;?></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <p class="card-test sm">
                                    <?php echo one_col('team_info','team_name',"id = $row->team_1"); ?>
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-test sm">
                                    172 & 63-3  
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="card-test sm">
                                <?php echo one_col('team_info','team_name',"id = $row->team_2"); ?>  
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-test sm">
                                    524 & 4-d  
                                </p>
                            </div>
                        </div>
                        
                        <small class="text-danger">Date: <?php echo $row->date?> Time: <?php echo $row->time?></small>
                        
                    </div>
                    </div>
                </div>

            <?php } ?>


                
                
            </div>
        </section>
    </div>

<?php include('inc/footer.php');?>

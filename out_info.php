<?php 
include('inc/header.php');

?>
<link src="css/style.css" type="text/css"/>

<div class="container">
    <div class="row">
        <h4 class="text text-success pt-2 pb-2">Out Information </h4> <br>
        <form action="" method="post">

                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Out Type:</label>
                        <div class="col-sm-6">
                        <input type="out_type" class="form-control" id="out_type">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Description:</label>
                        <div class="col-sm-6">
                        <input type="description" class="form-control" id="description">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Player Name:</label>
                        <div class="col-sm-6">
                        <input type="player_id" class="form-control" id="player_id">
                        </div>
                </div>
                <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Ball No:</label>
                        <div class="col-sm-6">
                        <input type="ball_no" class="form-control" id="ball_no">
                        </div>
                </div>
                <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Over No:</label>
                        <div class="col-sm-6">
                        <input type="over_no" class="form-control" id="over_no">
                        </div>
                </div>
                <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Match No:</label>
                        <div class="col-sm-6">
                        <input type="match_no" class="form-control" id="match_no">
                        </div>
                </div>
                <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Team No:</label>
                        <div class="col-sm-6">
                        <input type="team_no" class="form-control" id="team_no">
                        </div>
                </div>
                <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-6">
                <button type="button" class="btn btn-success">Success</button>
                </div>
                        </div>
                </div>
        </form>
    </div>
</div>








<?php


include('inc/footer.php');
?>
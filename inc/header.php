<?php include 'db/dbConnect.php';?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live Score</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.scss">
  </head>
  <body class="bg-light">
    
    <div class="container-fulid">
       
           <nav class="navbar navbar-expand-lg" style="background-color:#038c7f;">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="" srcset=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="live_scores.php">Live Scores</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="schedule.php">Schedule</a>
                    </li>

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Entry Pages
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Player_entry.php">Player Info</a></li>
                        <li><a class="dropdown-item" href="team_info.php">Team Info</a></li>
                        <li><a class="dropdown-item" href="match_type.php"> Match Type</a></li>
                        <li><a class="dropdown-item" href="match_reg.php"> Match Registration</a></li>
                        <li><a class="dropdown-item" href="over_information.php">Over Info</a></li>
                        <li><a class="dropdown-item" href="ball_info.php">Ball Info</a></li>
                    </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
                </div>
            </div>
            </nav>

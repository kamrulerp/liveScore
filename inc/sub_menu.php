



<ul class="nav nav-tabs pt-4 ">
  <li class="nav-item">
    <a class="nav-link <?php if ($page == 'live') { echo 'active';} ?>" href="live_scores.php">Current Matches</a>
  </li>
  <li class="nav-item">

    <a class="nav-link <?php if ($page == 'schedule') {echo 'active';} ?>" href="schedule.php">Matches By Day</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($page == 'futcher') {echo 'active';} ?>" href="next_series.php">Current & Future Series</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($page == 'teams') {echo 'active';} ?>" href="teams_view.php">Teams</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if ($page == 'series') {echo 'active';} ?>" href="live_series.php">Series Archive</a>
  </li>

</ul>

<?php

    session_start();

    require './dbconfig.php';

    $team_name = $_SESSION['user'];
    $submit_time_query = "UPDATE `records` SET `submit_time`=NOw() WHERE `team_name`='$team_name';";

    mysqli_query($con, $submit_time_query);

?>
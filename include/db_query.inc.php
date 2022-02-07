<?php

function db_get_ques_data($currentLetter)
{
    require_once 'dbconfig.php';
    if ($con === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
        echo 'Cannot connect to database';
    } else {
        $query = 'Select * from questions WHERE initial = ?';
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            print "Failed to prepare statement\n";
        }
        $p = 's';
        mysqli_stmt_bind_param($stmt, $p, $currentLetter,);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        $numOfRows = mysqli_num_rows($result);

        if ($numOfRows != 0) {
            if ($numOfRows == 1) {
                $qIndex = 0;
            } else {
                while (true) {
                    $qIndex = random_int(0, $numOfRows - 1);
                    $quesData = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    if (!count($_SESSION['questionArr'])) {
                        break;
                    } elseif (!in_array($quesData[$qIndex]['sr'], $_SESSION['questionArr'])) {
                        array_push($_SESSION['questionArr'], $quesData[$qIndex]['sr']);
                        break;
                    }
                }
                return $quesData[$qIndex];
            }
        } else {
            echo '<script>Alert("Specified letter not found in db");</script>';
        }
    }
}

function add_submit_time_to_db($con, $teamname)
{
session_start();
    if ($con === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
        echo 'Cannot connect to database';
    } else {
        $time = time();
        $time_required = strval(gmdate('H:i:s', ($time - $_SESSION['start_time'])));
        $query = 'insert ignore into records (submit_time ,team_name,reg_time,required_time) Values(?,?,?,?)';
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            print "Failed to prepare statement\n";
        }
        $time = strval($time);
        $start_time = strval($_SESSION['start_time']);
        $_SESSION['time_taken_by_team']=$time_required;
        $p = 'ssss';
        mysqli_stmt_bind_param($stmt, $p, $time, $teamname, $start_time, $time_required);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);


        if ($result) {
            return true;
        }
        return false;
    }
}


function add_start_time_to_db($teamname)
{

    $_SESSION['start_time'] = time();
    return true;
}


function update_treasure_winner(){
    require 'dbconfig.php';
    session_start();
    if ($con === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
        echo 'Cannot connect to database';
    } else {
        
        $query = 'insert ignore into tf (team_name) Values(?)';
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $query)) {
            print "Failed to prepare statement\n";
        }
    
        $p = 's';
        mysqli_stmt_bind_param($stmt, $p, $_SESSION['user']);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);


      
    }
}
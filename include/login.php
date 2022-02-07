<?php
session_start();

require_once 'dbconfig.php';

if (isset($_POST['submit'])) {

    # data-retrieval
    $team_name = ucfirst(strtolower(mysqli_real_escape_string($con, $_POST['team-name'])));
    $passcode = mysqli_real_escape_string($con, $_POST['passcode']);

    # fetch-credentials
    $login_query = "SELECT * FROM `credentials` WHERE `team_name`=? AND `passcode`=?;";
    $stmt= mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $login_query))
{
    print "Failed to prepare statement\n";
}
$p='ss';
mysqli_stmt_bind_param($stmt,$p, $team_name,$passcode );
    
mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
 

    if (mysqli_num_rows($result) == 0) {
        echo "
            <script>
                alert('Error! Invalid Credentials!');
                document.location='../form.html';
            </script>";
    } else {
        require_once 'db_query.inc.php';
        # records registration time
        if (add_start_time_to_db($con, $team_name)) {
            $_SESSION['user'] = $team_name;
            require_once 'initial_config.inc.php';
            header('location: ../question.php');
        } else {
            echo '<script>alert("Error in starting heist!!")</script>';
        }
    }
}

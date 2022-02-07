<?php
session_start();
    require 'dbconfig.php';

    if(isset($_POST['submit'])){

        $answer = mysqli_real_escape_string($con, $_POST['answer']);
        $answer = strtolower($answer);                                  # converts to lowercase
        if($answer=='stealthy'){                             # compares with stealthy
           $_SESSION['heist_solved']=1;
           require_once 'db_query.inc.php';
           add_submit_time_to_db($con,$_SESSION['user']);
            header('location:../heist_completed.php');
        }
        else{
            echo "
            <script>
                alert('Wrong answer, please try again!');
                document.location='../final_question.php';
            </script>";
            
        }
    }
    else{
  echo 'hello';
    }
?>
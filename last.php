<?php 
session_start();
if($_SESSION['user']&&$_SESSION['heist_solved']){
    require 'include/db_query.inc.php';
    update_treasure_winner();
    session_destroy();

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <style>
        html {
            height: 100%;
            background-color: black;
        }
        
        #Container {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
        
        #Container video {
            position: absolute;
            left: 50%;
            top: 50%;
            /* The following will size the video to fit the full container. Not necessary, just nice.*/
            min-width: 100%;
            min-height: 100%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            z-index: 0;
        }
        
        #Container div {
            position: static;
            /* z-index: 1; */
        }
    </style>

    <div id="Container" style="padding: 0%;">
        <video loop="true" autoplay  style="padding: 0%;">
            <source src="video/truend.mp4" type="video/mp4" />
        </video>
        <div></div>
    </div>
</body>

</html>

<?php
}

else{
    header('location:index.php');
}
?>
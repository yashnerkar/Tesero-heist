<?php 
session_start();
if(true || isset($_SESSION['user'])&& $_SESSION['heist_solved'] ){
    
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap" rel="stylesheet">
    <title>Home</title>
    <style>
    body {
            overflow-y: hidden ;
            overflow-x: hidden;
        }
    </style>
</head>

<body class="winnerDiv border border-light ">
    <div class="container text-light " style="margin-top:20rem;">
        <h2 class="text-center"style="font-size:2.5rem;">TIME TAKEN :
            <?php

        echo $_SESSION['time_taken_by_team'];

       ?>
        </h2> 
    </div> 
        <h1 id="hiddentext" class="text-light text-center mt-4">This Is Not The True Ending..<snap><a class="secretlink" href="last.php">.</a></snap>..</h1> 
</body>

</html>

<!-- time_taken_by_t -->
<?php







}
else{
    header('location:index.php');

}

?>
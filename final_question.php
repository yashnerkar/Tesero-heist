<?php 
session_start();
if($_SESSION['user'] && $_SESSION['final'] ){

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <!-- <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script> -->
    <link rel="stylesheet" href="nicepage.css">
    <link rel="stylesheet" href="Home.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>



    <style>
        body{
            background-image: url(images/nnnn.jpg);
        }
        .parent {
            display: grid;
            grid-template-columns: repeat(4, 300px);
            grid-template-rows: repeat(2, 300px);
            grid-column-gap: 10px;
            grid-row-gap: 10px;
            /* margin-left: 7rem;
            margin-top: 5rem; */
        }
        
        .div1 {
            border: 10px;
            grid-area: 1 / 1 / 2 / 2;
        }
        
        .div2 {
            grid-area: 1 / 2 / 2 / 3;
        }
        
        .div3 {
            grid-area: 1 / 3 / 2 / 4;
        }
        
        .div4 {
            grid-area: 1 / 4 / 2 / 5;
        }
        
        .div5 {
            grid-area: 2 / 1 / 3 / 2;
        }
        
        .div6 {
            grid-area: 2 / 2 / 3 / 3;
        }
        
        .div7 {
            grid-area: 2 / 3 / 3 / 4;
        }
        
        .div8 {
            grid-area: 2 / 4 / 3 / 5;
        }
    </style>

    <div class="container border-white border text-light text-center">
        <h3>You have solved all the clues.<br> Now, you have everything to figure out the secret code to open the vault.</h3>
    </div>

    <div class="parent mt-5 justify-content-center">

    <?php
        $index = 1;
        foreach($_SESSION['displayedQuestionArr'] as $element){
    ?>
        <div class="div<?php echo $index ?> border border-dark">
            <img style='height: 100%; width: 100%; object-fit: contain' src="quesImages/<?php echo $element?>" />
        </div>
    <?php
        $index++;
        }
    ?>
    </div>
    <br>
    <hr>
    <form method="post" action="./include/check_final_ans.php">
        <div class="container-fluid input-group input-group-lg mb-5 w-50 text-center">
            <input type="text" class="form-control border border-danger shadow shadow-md text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Enter Your Answer" name="answer" autofocus="true" autocomplete="false">
        </div>
        <div class="u-align-center u-form-group u-form-submit u-form-group-2 ">
            <!--- <a href="" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1 ">Submit</a>
            --->
            <button type="submit " value="submit " name="submit"  class="btn btn-danger btn-lg pl-4 pr-4">Submit</button>

        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns " crossorigin="anonymous "></script>

</html>

<?php
}
else{
    header('location:index.php');
}


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200&family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
    <title>Home</title>


    <style>
        /* width */
        
         ::-webkit-scrollbar {
            width: 10px;
        }
        /* Track */
        
         ::-webkit-scrollbar-track {
            background: #000;
        }
        /* Handle */
        
         ::-webkit-scrollbar-thumb {
            background-color: red;
        }
        /* Handle on hover */
        
         ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        
        body {
            overflow-y: hidden;
        }
    </style>



</head>

<body id="home_page">
    <audio loop autoplay >
        <source src="audio/startsong (1).mp3" type="audio/mp3">
    </audio>

    <!-- Optional JavaScript; choose one of the two! -->

    <div class="container-fluid border border-dark" style="height:50em;background-image: url(images/home4.jpg);">
        <!-- <H1 class="text-light" style="margin-top:20rem;font-family: 'ZCOOL KuaiLe', cursive;font-size:4rem;margin-left:2rem;">Tesoro Heist</H1> -->
        <H1 class="text-light" style="margin-top:20rem;font-family: 'ZCOOL KuaiLe', cursive;font-size:4rem;margin-left:2rem;">Tesoro Heist</H1>
        <hr style=" background-color:white;width:30em;margin-left: 0; "></hr>
        <form action="form.html">
            <button type="submit" class="pl-5 pr-5 btn btn-lg btn-danger rounded-pill" style="font-family: 'Nunito Sans', sans-serif;margin-left: 7rem;">START NOW</button>
        </form>
        <div class="container-fluid fixed-top">
       
        <p class="text-light d-flex justify-content-end pr-5" style="font-size:2em;">Gold Sponsor:</p>
        
        <div class=" d-flex justify-content-end">
        <img src="images/aab.png" alt="" height="85" width="280">
        </div>
        </div>
        
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns " crossorigin="anonymous "></script>
    
     <script type="text/javascript">
    window.onload=async function(){
    await document.querySelector('#my_song').play();
     }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js " integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF " crossorigin="anonymous "></script>
    -->
    <script type="text/javascript">
    window.onload=async function(){
    await document.querySelector('#my_song').play();
     }
    </script>
</body>

</html>
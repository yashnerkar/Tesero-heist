<?php
session_start(); //uncomment this when login connected

if(isset($_SESSION['user']) ){
if($_SESSION['newQuesFlag']){    
require 'include/get_ques.inc.php'; //new ques taken only if flag is set
}
// 

?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>heist</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <!-- <link rel="stylesheet" href="Home.css" media="screen"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.23.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i">


    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
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
            overflow-y: hidden !important;
            /* overflow-x: hidden; */
        }
    </style>
</head>
<audio loop autoplay >
        <source src="audio/startsong (1).mp3" type="audio/mp3">
    </audio>
<body class="questionpage">

    <div class="container-fluid">

        <div class="container" id="logodiv1">
            <img src="images/CSI-CATTDMCE.png" width="260rem" height="70rem">
        </div>
        <!-- <div class="container mt-3" id="logodiv2">
            <img src="images/aab.png" width="300rem" height="100rem">
        </div> -->

        <!-- <div class="container-fluid mt-5"> -->
        <div class="row questionContent">
            <!-- question div -->
            <div class="col-md-6 col-sm-6">
                <div class="container  text-center pt-5 pb-5 border border-dark questionDiv ">
                    <img class=" pl-2 pr-2" id="questionImg" src="quesImages/<?php echo $_SESSION['currentQues'] ?>" style="max-height:60vh;">
                </div>
            </div>
            <!-- answer section -->
            <div class="col-md-6 col-sm-6" >
            <div class="container ">

                    <div class="u-align-center u-container-style u-group u-group-1 answerDiv border border-danger rounded-lg ">
                        <div class="u-container-layout u-valign-top u-container-layout-1 ">
                            <h1 class="u-custom-font u-font-pt-sans u-text u-text-1 text-dark ">Answer</h1>
                            <div class="u-align-left u-expanded-width-xs u-form u-form-1 ">
                                
                                    <form action="include/check_ans.php" method="POST" class=" " style="padding: 10px " source="email " name="form ">
                                        <!-- <input type="hidden " id="siteId " name="siteId " value="654333 " wfd-invisible="true "> -->
                                        <!-- <input type="hidden " id="pageId " name="pageId " value="654343 " wfd-invisible="true "> -->
                                        <div class="u-form-group u-form-name u-form-group-1 ">

                                            <label for="name-5a14 " class="u-form-control-hidden u-label " wfd-invisible="true ">Name</label>

                                            <input type="text " placeholder="Enter your Answer " id="name-5a14 " name="answer" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white align-center" required=" " autofocus="true" autocomplete="off">

                                        </div>
                                        <div class="u-align-center u-form-group u-form-submit u-form-group-2 ">
                                        <button type="submit " value="submit " name="submit"  class="btn btn-lg btn-danger mt-3 border border-dark text">Submit</button>


                                        </div>
                                    </form>
                                
                            </div>
                        </div> 
                    </div>
                    
    </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns " crossorigin="anonymous "></script>
    <script type="application/ld+json ">
        {
            "@context ": "http://schema.org ",
            "@type ": "Organization ",
            "name ": " "
        }
    </script>
    <script src="index.js "></script>

</body>

</html>

<?php
}
else{
    header('location:index.php');
}
?>
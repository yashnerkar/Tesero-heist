<?php
session_start();
if(isset($_POST['submit'])){
  $userAns=strtolower(strip_tags($_POST['answer']));
  
  
    if(password_verify($userAns, $_SESSION['currentAns'])){
      $_SESSION['newQuesFlag']=1;
      if(count($_SESSION['letterArr'])==0){
        $_SESSION['final']=1;
        
        echo '<script>alert("correct");document.location="../final_question.php";</script>';
        exit();
    }
      echo '<script>alert("correct");document.location="../question.php";</script>';
 //new ques will be fetched
    }
    else{
      echo '<script>alert("Wrong answer!!");document.location="../question.php";</script>';
    }
}
else{
  
    header('location: ../question.php?msg="not submitted"');
}
?>
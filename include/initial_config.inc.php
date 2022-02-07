<?php
session_start();
$_SESSION['letterArr']=['s','t','e','a','l','t','h','y']; //for taking 1 lettered question from 8 letters while removing 1 each turn

$_SESSION['questionArr']=[]; //question sr
$_SESSION['displayedQuestionArr']=[];//Questionsimage ids of questions that were displayed to player
$_SESSION['newQuesFlag']=1;
$_SESSION['quesNo']=0;

$_SESSION['final']=0;

?>
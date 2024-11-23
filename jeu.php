<?php
include_once "Bebou.php";
include "Question.php";
include "questions.php";
session_start();



$bebous = $_SESSION['bebou'];

 $currentQuestionIndex = $_SESSION['current_question'];
 $question = $questions[$currentQuestionIndex];
 $userAnswer = $_POST['answer'];

 if (isset($_POST['answer'])) {
     $answer = $_POST['answer'];
     if ($question->isCorrect($answer)) {
         $bebous->moveForward();
     } else {
         $bebous->looseHealth();
     }
    $_SESSION['bebou'] = $bebous;
    $_SESSION['current_question']++;
    if($bebous->getPosition() == 10){
        $_SESSION['result'] = "Tu as rejoint ta Choupinette, Bravo !";
        unset( $_SESSION["bebou"] );
    }
    if($bebous->getHealth() == 0) {
        $_SESSION['gameover'] = "Game Over";
        unset($_SESSION["bebou"]);
    }
 } else {
    $_SESSION['error'] = "Bah, t'as pas coché de case, t'as cru que ça allais passer mon Bébou ? Nonnon, je fait des vérifs MONSIEUR Bébou <3";
 }
    


  header('Location: index.php');
  exit;


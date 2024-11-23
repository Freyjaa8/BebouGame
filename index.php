<?php
include "header.html";
include "Bebou.php";
include "Question.php";
include "questions.php";
session_start();

if (!isset($_SESSION['bebou'])) {
    $bebou = new Bebou("Bebou", 100);
    $_SESSION['bebou'] = $bebou;
    $_SESSION['current_question'] = 0;
}

$currentQuestionIndex = $_SESSION['current_question'];
$question = $questions[$currentQuestionIndex];

include "interfaceJeu.php";
include "modal.php";
include_once "script.php";
include "footer.html";
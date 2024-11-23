<?php
class Question {
    public $text;
    public $choices;
    public $correctAnswer;

    public function __construct($text, $choices, $correctAnswer){
        $this->text = $text;
        $this->choices = $choices;
        $this->correctAnswer = $correctAnswer;
    }

    public function isCorrect($answer) {
        return $answer === $this->correctAnswer;
    }
}
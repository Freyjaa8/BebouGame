<?php 
class Bebou {
    private $nom;
    private $health;
    private $position;

    public function __construct($nom, $maxhealth){
        $this->nom = $nom;
        $this->health = $maxhealth;
        $this->position = 0;
    }

    public function moveForward($steps =1){
        $this->position+=$steps;
    }

    public function isAlive(){
        return $this->health > 0;
    }

    public function looseHealth($damage=10){
        $this->health -= $damage;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function getPosition()
    {
        return $this->position;
    }
}

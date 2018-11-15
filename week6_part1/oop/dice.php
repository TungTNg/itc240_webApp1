<?php

class Dice
{
    public $numberOfSides = 6;
    public $currentValue;
    
    public function __construct() {
        $this->roll();
    }
    
    public function roll() {
        $this->currentValue = random_int(1, $this->numberOfSides);
    }
    
    public function draw() {
        
    }
}

$myDice = new Dice();
$billyDice = new Dice();
$sallyDice = new Dice();

echo "My dice's current value is: " . $myDice->currentValue . "\n";

echo "Billy's current value is: " . $billyDice->currentValue . "\n";

echo "Sally's current value is: " . $sallyDice->currentValue . "\n";
<?php

$answer = random_int(1, 10);

echo "Guess a nuber between 1 and 10.\n";

while ($answer != ($userAnswer = fgets(STDIN))) {
    if ($answer > $userAnswer) {
        echo "Your number is too low!\n";
    } else {
    echo "Your number is too big!\n"; 
    }
}

echo "You guessed it right! The answer $answer.\n";
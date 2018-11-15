<?php
echo "\n".
     "Welcome to the Mystical World of Everbridge!\n".
     "============================================\n\n";
     
echo "To start your journey, press [Enter]\n";
$answer = fgets(STDIN);
level1($answer);

function level1($answer) {
    echo "\n";
    switch ($answer) {
        case 1:
            echo "You died of dysentery.\n";
            break;
        case 2:
            echo "Your move beat the gnome\n";
            echo "To continue your journey, press [Enter]\n";
            $answer = fgets(STDIN);
            level2($answer);
            break;
        default:
            echo "You are stopped by a gnome at the bridge.\n".
                 "Do you [1] Wait, or [2] Fight it? ";
            level1(fgets(STDIN));
    }
}

function level2($answer) {
    echo "\n";
    switch ($answer) {
        case 1:
            echo "The old man turned out to be a powerful wizard and he was very "
            . "moved by your action.\n"
            . "He gave you an Speed Potion!\n"
            . "==============================\n"
            . "You used the potion and advanced to the final level!!!\n";
            echo "To continue your journey, press [Enter]\n";
            $answer = fgets(STDIN);
            level4($answer);
            break;
            
        case 2:
            echo "Today is a peaceful day !\n"
            . "No monsters whatsoever...!\n";
            echo "To continue your journey, press [Enter]\n";
            $answer = fgets(STDIN);
            level3($answer);
            break;
            
        case 3:
            echo "The old man turned out to be a powerful wizard and he was very "
            . "angry with your action.\n"
            . "He snapped his finger and all of your bones broke...\n"
            . "You died because you was an asshole!!!\n";
            break;
            
        default:
            echo "You saw an eldery laying on the dirty road shivering.\n".
                 "Do you [1] Give him your cloak, [2] Continue your journey, or [3] Spit on him? ";
            level2(fgets(STDIN));
    }
}

function level3($answer) {
    echo "\n";
    switch ($answer) {
        case 1:
            echo "The snake grabbed your body and snapped it in 3 seconds...\n"
            . "You died, you foolish mortal!!!\n";
            break;
            
        case 2:
            echo "The snake quickly ran away because of your stinky smell....\n";
            echo "To continue your journey, press [Enter]\n";
            $answer = fgets(STDIN);
            level4($answer);
            break;
            
        default:
            echo "Suddenly, you encountered an enormous snake in a middle of the road!\n".
                 "Do you [1] Try to fight it, or [2] Fart loudly and longly? ";
            level3(fgets(STDIN));
    }
}

function level4($answer) {
    echo "\n";
    switch ($answer) {
        case 1:
            echo "Tung is extremly pleased with your answer....\n"
            . "He rewarded you with a hot handsome prince or a beautiful princess of your choice!!!\n";
            level5();
            break;
            
        case 2:
            echo "Tung is extremely angry with your arrogance....\n"
            . "He pressed Delete key on the keyboad he is handing!\n"
            . "You've faded into the void, you silly silly human being!\n";
            break;
            
        default:
            echo "At the end of the road, you encountered an handsome Asian boy!\n"
                . "He introduced himself as Tung Nguyen, the magnificient Coder !!!\n"
                . "Do you [1] Praise him, or [2] Throw shade at him? ";
            level4(fgets(STDIN));
    }
}

function level5() {
    echo "\n".
         "============================\n".
         "| You won! Congratulations |\n".
         "============================\n";
}
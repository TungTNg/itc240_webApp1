<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz App</title>
</head>
<body>
    <?php
    $questionsFromDB = [
        "Is PHP cool" => [
            "A" => "Yes",
            "B" => "No",
            "C" => "Maybe",
            "D" => "All of the above"
            ],
        
        "What is best fruit?" => [
            "A" => "Apple",
            "B" => "Pineapple",
            "C" => "Pumpkin"
            ]
        ];
    ?>
    <h1>Quiz</h1>
    
    <form>
        <?php foreach($questionsFromDB as $question => $answer): ?>
            <p>
            <label>
                <?php echo $question; ?>
            </label>
            
            <select>
                <?php foreach($answer as $val => $text): ?>
                    <option value="<?php echo $val; ?>">
                        <?php echo $text; ?>
                    </option>
                <?php endforeach ?>
            </select>
            </p>
        <?php endforeach ?>
    </form>
</body>
</html>
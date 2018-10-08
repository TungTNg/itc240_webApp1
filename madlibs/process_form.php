<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Be Kind Mad Lib</title>
</head>
<body>
    <h1>
        Be Kind Mad Lib
    </h1>
    
    <?php 
    if ($_GET['noun_1']) {
        $noun_1 = $_GET['noun_1'];
    } else {
        $noun_1 = "[Word Not Submitted]";    
    }
    
    if ($_GET['noun_2']) {
        $noun_2 = $_GET['noun_2'];
    } else {
        $noun_2 = "[Word Not Submitted]";
    }
    
    if ($_GET['noun_plural_1']) {
        $noun_plural_1 = $_GET['noun_plural_1'];
    } else {
        $noun_plural_1 = "[Word Not Submitted]";
    }
    
    if ($_GET['place_1']) {
        $place_1 = $_GET['place_1'];
    } else {
        $place_1 = "[Word Not Submitted]";
    }

    if ($_GET['adjective_1']) {
        $adjective_1 =  $_GET['adjective_1'];
    } else {
        $adjective_1 = "[Word Not Submitted]";
    }

    if ($_GET['noun_3']) {
        $noun_3 = $_GET['noun_3'];
    } else {
        $noun_3 = "[Word Not Submitted]";
    }
    
    echo "<p>Be kind to your $noun_1-footed $noun_plural_1</p>"
    . "<p>For a duck may be somebody`s $noun_2,</p>"
    . "<p>Be kind to your $noun_plural_1 in $place_1</p>"
    . "<p>Where the weather is always $adjective_1.</p>"
    . "<br>"
    . "<p>You may think that this is the $noun_3,</p>"
    . "<p>Well it is.</p>"	
    
    ?>
</body>
</html>
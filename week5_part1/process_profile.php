<?php

define("BASEPATH", dirname(__FILE__));

$name = "";
$photoPath = null;


if (isset($_POST["name"])) {
    $name = $_POST["name"];
    echo "There's name!!!";
}

if (isset($_FILES["profile_photo"])) {
    $photoPath = '/media/'.basename($_FILES['profile_photo']['name']);
    $photoFullPath = BASEPATH.$photoPath;
    
    if (move_uploaded_file($_FILES['profile_photo']['tmp_name'], $photoFullPath)) {
        // Yay!
    } else {
        $photoPath = null;
        die('Move failed.');
        // Your file size is probably too large.
    }
} else {
    echo "No file";
}

    //   
    //  ."&photo=".$photo);
    
header("Location: "."/itc240_webApp1/week5_part1"."/my_profile.php?name=".$name.'&photo='.$photoPath);

?>
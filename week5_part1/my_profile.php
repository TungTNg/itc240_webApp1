<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>
</head>
<body>
    <h1>My Profile</h1>
    <?php if(isset($_GET["name"])): ?>
        <p>
            My name is:
            <strong>
                <?php echo $_GET["name"]; ?>
            </strong>
        </p>
    <?php endif ?>
    
    <?php if(isset($_GET["photo"])): ?>
        <p>
            Photo is:
            <img src="/itc240_webApp1/week5_part1<?php echo $_GET["photo"]; ?>"
        </p>
    <?php endif ?>
</body>
</html>
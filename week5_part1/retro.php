<?php 

$data = [
    'Nitendo NES',
    'Super Nitendo',
    'Nitendo N64'
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Retro Gaming List</title>
</head>
<body>
    <h1>My Retro Gaming List</h1>
    
    <ul>
        <?php foreach($data as $console): ?>
             <li>
                <?php echo $console ?> 
             </li>   
        <?php endforeach ?>
        
        <?php if($_SERVER['REQUEST_METHOD'] == "POST") { ?>
            <li>
                <?php if(isset($_POST["console"])) {
                    echo $_POST["console"];
                } ?>
            </li>
        <?php } ?>    
    </ul>
    
    <h3>Add New Retro Console</h3>
    
    <form method="POST" action="">
        <p>
            <label for="console">Console Name</label>
            <input type="text" name="console" value=""/>
        </p>
        
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List</title>
</head>
<body>
    <?php
    $dataFromDatabase = ["Get milk", "Finish  homework", "Walk the dog"];
    ?>
    <h1>To Do List</h1>
    
    <ul>
        <?php foreach($dataFromDatabase as $todoItem): ?>
            <ul>
                <?php echo $todoItem; ?>
            </ul>
        <?php endforeach ?>
    </ul>
</body>
</html>
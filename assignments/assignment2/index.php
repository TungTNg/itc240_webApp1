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
    
    <h2>
        p/s: Empty fields will be displayed as [Word Not Submitted]
    </h2>
    <form action="process_form.php" method="get"> 
        
        <p>
            <label for="noun_1">Noun 1</label>
            <input type="text" name="noun_1" id="noun_1"/>
        </p>
        
        <p>
            <label for="noun_plural_1">Noun (Plural)</label>
            <input type="text" name="noun_plural_1" id="noun_plural_1"/>
        </p>        
        
        <p>
            <label for="noun_2">Noun 2</label>
            <input type="text" name="noun_2" id="noun_2"/>
        </p>     

        <p>
            <label for="place_1">Place</label>
            <input type="text" name="place_1" id="place_1"/>
        </p>

        <p>
            <label for="adjective_1">Adjective</label>
            <input type="text" name="adjective_1" id="adjective_1"/>
        </p>     
        
        <p>
            <label for="noun_3">Noun 3</label>
            <input type="text" name="noun_3" id="noun_3"/>
        </p>
        
        <button type="submit"/>Go Mad</button>
    </form>
</body>
</html>
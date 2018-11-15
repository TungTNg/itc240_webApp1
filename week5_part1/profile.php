<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile</title>
</head>
<body>
    <h1>New Profile</h1>
    
    <form action="process_profile.php" method="POST" enctype="multipart/form-data">
        <p>
            <label for="name">Your Name:</label>
            <input type="text" name="name"/>
        </p>
        
        <p>
            <label for="profile_photo">Profile photot:</label>
            <input type="file" name="profile_photo"/>
        </p>
        
        <p>
            <button type="submit">Save Profile</button>
        </p>
    </form>
</body>
</html>
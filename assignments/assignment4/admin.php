<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
</head>
<body>
    
    <form action="" method="post">
    
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password"  name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">
    
    </form>
    
    <?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['submit'])) {
        
            $name = array("admin", "superuser", "administrator", "tungsohandsome", "tungthemagnificient", "tungthecoder");
            $pass = password_hash("password", PASSWORD_DEFAULT);

            $username = $_POST['username'];
            $password = $_POST['password'];

            
            if(!in_array($username, $name) || !password_verify($password, $pass)) {
                echo "Sorry you have entered incorrect username/password!" . "<br>";
            } else {
                echo "Welcome, " . $username . "!" . "<br>";
                
                $myfile = fopen("contacts.txt", "r");
                // Output until special "end of file" check returns true.
                
                if(!$myfile) {
                    echo "Couldn't open the data file. Try again later.";
                    exit;
                }
                
                while (!feof($myfile)) {
                echo fgets($myfile) . "<br>";
                }
                
                fclose($myfile);
    
            }
        
        }
    
    }
    
    
    ?>
    
</body>
</html>
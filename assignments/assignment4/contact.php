<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
</head>
<bod>
    <h1>
        My Contact
    </h1>
    
    <hr>
    
    <?php
        // Track fields with errors
        $errors = [];
        
        // Only process on submit.
        $contact_name = $contact_email = $contact_phone = '';
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (empty($_POST['contact_name'])) {
                $errors[] = 'contact_name';
            } else {
                $contact_name = $_POST['contact_name'];
            }
            
            if (isset($_POST['contact_email'])) {
                $contact_email = $_POST['contact_email'];
                if (!filter_var($contact_email, FILTER_VALIDATE_EMAIL)) {
                    $errors[] = 'contact_email';
                }
            } else {
                $errors[] = 'contact_email';
            }
            
            if (isset($_POST['contact_phone'])) {
                $contact_phone = $_POST['contact_phone'];
                if (!filter_var($contact_phone, FILTER_SANITIZE_NUMBER_INT) ||  strlen(filter_var($contact_phone, FILTER_SANITIZE_NUMBER_INT)) < 10 ) {
                    $errors[] = 'contact_phone';
                }
            } else {
                $errors[] = 'contact_phone';
            }
            
            if (count($errors) > 0) {
                echo "<strong style='color: red'>Fix the errors.</strong>";
                echo "<ul>";
                foreach ($errors as $error) {
                    echo "<li>Required field: $error</li>";
                }
                echo "</ul>";
            } else {
                $contactFile = fopen('contacts.txt', 'a');
                fwrite(
                    $contactFile,
                    "User: $contact_name\nEmail: $contact_email\nPhone Number: $contact_phone\n\n"
                );
                fclose($contactFile);
                echo "<strong>Thank you, $contact_name.</strong>";
                $contact_name = $contact_email = $contact_phone = '';
            }
        }
    ?>
    
    <hr>
    
    <h3>
        Sign the Guestbook
    </h3>
    <em>
        * fields are required
    </em>

    
    <form method="post" action="">
        <p>
            <label for="contact_name">
                Enter your name:*
            </label>
            <input type="text" name="contact_name" value="<?php echo $contact_name; ?>">
            <?php if (in_array('contact_name', $errors)): ?>
                <br>
                <span style="color: red">Field is required.</span>
            <?php endif ?>
        </p>
        
        <p>
            <label for="contact_email">
                Enter a valid email:*
            </label>
            <input type="text" name="contact_email" value="<?php echo $contact_email; ?>">
            <?php if (in_array('contact_email', $errors)): ?>
                <br>
                <span style="color: red">Valid email is required.</span>
            <?php endif ?>
        </p>
        
        <p>
            <label for="contact_phone">
                Enter a valid 10 digit phone number:
            </label>
            <input type="text" name="contact_phone" value="<?php echo $contact_phone; ?>">
            <?php if (in_array('contact_phone', $errors)): ?>
                <br>
                <span style="color: red">Valid phone number (at least 10 numberic character) is required.</span>
            <?php endif ?>
        </p>
        
        <p>
            <button type="submit">
                Submit contact
            </button>
        </p>
    </form>
    
</bod>
</html>
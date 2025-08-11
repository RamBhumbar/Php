<?php

function validateEmail($email) {
   
    if (substr_count($email, "@") != 1) {
        return "Invalid email: '@' symbol must appear exactly once.";
    }

    
    list($localPart, $domainPart) = explode('@', $email);

   
    if (preg_match('/^[0-9._@-]/', $localPart)) {
        return "Invalid email: Local part cannot start with a digit, underscore, dot, or special character.";
    }

    
    if (substr_count($localPart, '.') > 1) {
        return "Invalid email: Dot (.) can appear at most once before '@'.";
    }

    
    if (preg_match('/^\./', $domainPart) || preg_match('/\.$/', $domainPart)) {
        return "Invalid email: Domain part cannot start or end with a dot.";
    }

    
    if (substr_count($domainPart, '.') < 1) {
        return "Invalid email: Domain part must contain at least one dot (.) after '@'.";
    }

   
  
    if (ereg('[^a-zA-Z0-9.-]', $domainPart)) {
        return "Invalid email: Domain part contains invalid characters.";
    }
    return "Email is valid.";
}


if (isset($_POST['Validation']))  {
    $email = $_POST['email'];
    $validationResult = validateEmail($email);
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Email Validation</title>
</head>
<body>
    <h2>Enter Your Email Address</h2>

    
    <form action="A2SCQ1.php" method="POST">
        <label for="email">Email Address:</label>
        <input type="text" id="email" name="email" required>
        <input type="submit" name="Validation" value="submit">
    </form>

    <?php
    
    if (isset($validationResult)) {
        echo "<h3>$validationResult</h3>";
    }
    ?>
</body>
</html>

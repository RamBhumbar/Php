<!DOCTYPE html>
<html>
<head>
   
    <title>Mobile Number Validation</title>
</head>
<body>
    <h2>Mobile Number Validation</h2>
    <form  method="POST" action="mobilevalidation.php">
        <label for="mobile">Enter Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" required>
        <input type="submit" name="Validation" value="submit">
    </form>

<?php

if (isset($_POST['Validation'])) 
{
   
    $mobile = $_POST['mobile'];

    
    $pattern =  '/^\d{10}$/';

    
    if (preg_match($pattern, $mobile)) {
        echo "<h3>Mobile Number is valid: $mobile</h3>";
    } 
    else 
    {
        echo "<h3>Invalid Mobile Number. Please enter a valid 10-digit number.</h3>";
    }
}
?>
</body>
</html>
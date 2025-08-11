Design a HTML form to accept a string. Write a PHP function that checks whether a 
passed string is a palindrome or not?

<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <form method="post">
        <label>Enter a String:</label>
        <input type="text" name="inputString" required>
        <button type="submit">Check</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function isPalindrome($str) {
            $str = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($str));
            return $str === strrev($str);
        }
        
        $inputString = $_POST["inputString"];
        
        if (isPalindrome($inputString)) {
            echo "<p>'$inputString' is a Palindrome.</p>";
        } else {
            echo "<p>'$inputString' is NOT a Palindrome.</p>";
        }
    }
    ?>
</body>
</html>
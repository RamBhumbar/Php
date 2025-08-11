Design a HTML form to accept a string. Write a PHP function that checks whether a 
passed string is a palindrome or not?

<!-- index.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <h2>Enter a String to Check for Palindrome</h2>
    <form action="palindrome.php" method="post">
        <input type="text" name="inputString" required>
        <button type="submit">Check</button>
    </form>
</body>
</html>

<!-- palindrome.php -->
<?php
function isPalindrome($str) {
    $str = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $str)); // Normalize string
    return $str === strrev($str);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    if (isPalindrome($inputString)) {
        echo "<h2>The string is a palindrome.</h2>";
    } else {
        echo "<h2>The string is not a palindrome.</h2>";
    }
}
?>
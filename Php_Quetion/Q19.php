Design a HTML form to accept a string. Write a php function to reverse a string. 
<!-- index.html -->
<!DOCTYPE html>
<html>
<head>
    <title>Reverse String</title>
</head>
<body>
    <h2>Enter a String to Reverse</h2>
    <form action="reverse.php" method="post">
        <input type="text" name="inputString" required>
        <button type="submit">Reverse</button>
    </form>
</body>
</html>

<!-- reverse.php -->
<?php
function reverseString($str) {
    return strrev($str);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["inputString"];
    $reversedString = reverseString($inputString);
    echo "<h2>Reversed String:</h2>";
    echo "<p>" . htmlspecialchars($reversedString) . "</p>";
}
?>

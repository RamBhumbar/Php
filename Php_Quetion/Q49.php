Design a HTML form to accept a string. Write a php function to reverse a string. 

<!DOCTYPE html>
<html>
<head>
    <title>Reverse a String</title>
</head>
<body>
    <form method="post">
        <label>Enter a String:</label>
        <input type="text" name="inputString" required>
        <button type="submit">Reverse</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function reverseString($str) {
            return strrev($str);
        }
        
        $inputString = $_POST["inputString"];
        echo "<p>Reversed String: " . reverseString($inputString) . "</p>";
    }
    ?>
</body>
</html>

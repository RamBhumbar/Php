Write a PHP script for the following: Design a form to accept two strings. Compare the 
two strings using both methods (= = operator & strcmp function). Append second string to 
the first string. Accept the position from the user; from where the characters from the first 
string are reversed. (Use radio buttons)

<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>
    <h2>String Operations Form</h2>
    <form method="post" action="">
        <label>Enter First String:</label>
        <input type="text" name="string1" required><br><br>
        
        <label>Enter Second String:</label>
        <input type="text" name="string2" required><br><br>
        
        <label>Enter Position to Reverse from First String:</label>
        <input type="number" name="position" required><br><br>
        
        <input type="submit" name="submit" value="Perform Operations">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $str1 = $_POST['string1'];
        $str2 = $_POST['string2'];
        $pos = (int)$_POST['position'];
        
        // Compare strings using == operator
        $equal_operator = ($str1 == $str2) ? "Strings are equal (== operator)" : "Strings are not equal (== operator)";
        
        // Compare strings using strcmp function
        $strcmp_result = strcmp($str1, $str2) == 0 ? "Strings are equal (strcmp function)" : "Strings are not equal (strcmp function)";
        
        // Append second string to first string
        $appendedString = $str1 . $str2;
        
        // Reverse characters from given position
        if ($pos >= 0 && $pos < strlen($str1)) {
            $firstPart = substr($str1, 0, $pos);
            $secondPart = substr($str1, $pos);
            $reversedPart = strrev($secondPart);
            $finalString = $firstPart . $reversedPart;
        } else {
            $finalString = "Invalid position for reversal.";
        }
        
        echo "<h3>Results:</h3>";
        echo "<p>$equal_operator</p>";
        echo "<p>$strcmp_result</p>";
        echo "<p>Appended String: $appendedString</p>";
        echo "<p>Modified String after Reversal: $finalString</p>";
    }
    ?>
</body>
</html>
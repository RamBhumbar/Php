// Write a PHP script for the following: Design a form to accept two strings. Compare the 
two strings using both methods (= = operator & strcmp function). Append second string to 
the first string. Accept the position from the user; from where the characters from the first 
string are reversed. (Use radio buttons)

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];
    $position = $_POST['position'];
    
    echo "String 1: $string1 <br>";
    echo "String 2: $string2 <br>";
    
    // Compare using == operator
    if ($string1 == $string2) {
        echo "The strings are equal using '==' operator.<br>";
    } else {
        echo "The strings are not equal using '==' operator.<br>";
    }
    
    // Compare using strcmp function
    if (strcmp($string1, $string2) == 0) {
        echo "The strings are equal using strcmp function.<br>";
    } else {
        echo "The strings are not equal using strcmp function.<br>";
    }
    
    // Append second string to first string
    $appendedString = $string1 . $string2;
    echo "Appended String: $appendedString <br>";
    
    // Reverse part of the first string from given position
    if ($position >= 0 && $position < strlen($string1)) {
        $reversedPart = strrev(substr($string1, $position));
        $modifiedString = substr($string1, 0, $position) . $reversedPart;
        echo "Modified String after reversing from position $position: $modifiedString";
    } else {
        echo "Invalid position entered.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>
    <form method="post">
        Enter First String: <input type="text" name="string1" required><br>
        Enter Second String: <input type="text" name="string2" required><br>
        Enter Position to Reverse First String: <input type="number" name="position" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $string1 = $_POST['string1'];
    $string2 = $_POST['string2'];
    $reverse_position = $_POST['reverse_position'];

   
    $equal = ($string1 == $string2) ? "Strings are equal." : "Strings are not equal.";

    
    $strcmp_result = strcmp($string1, $string2);
    if ($strcmp_result == 0) {
        $strcmp_message = "Strings are equal (using strcmp).";
    } elseif ($strcmp_result < 0) {
        $strcmp_message = "String 1 is less than String 2 (using strcmp).";
    } else {
        $strcmp_message = "String 1 is greater than String 2 (using strcmp).";
    }

    
    $appended_string = $string1 . $string2;

   
    if ($reverse_position == 'start') {
        $string1_reversed = strrev(substr($string1, 0, strlen($string1))) . substr($string1, strlen($string1));
    } elseif ($reverse_position == 'end') {
        $string1_reversed = substr($string1, 0, strlen($string1) - 1) . strrev(substr($string1, strlen($string1) - 1));
    }
}
?>

<!DOCTYPE html>
<html>
<head>

    <title>String Comparison and Manipulation</title>
</head>
<body>
    <h2>String Comparison and Manipulation Form</h2>
    <form method="post">
        <label for="string1">Enter String 1:</label>
        <input type="text" id="string1" name="string1" required><br><br>

        <label for="string2">Enter String 2:</label>
        <input type="text" id="string2" name="string2" required><br><br>

        <label>Choose the position from which to reverse characters in String 1:</label><br>
        <input type="radio" id="start" name="reverse_position" value="start" required>
        <label for="start">Start</label><br>
        <input type="radio" id="end" name="reverse_position" value="end">
        <label for="end">End</label><br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h3>Comparison Results:</h3>";
        echo "<p>$equal</p>";
        echo "<p>$strcmp_message</p>";

        echo "<h3>Manipulation Results:</h3>";
        echo "<p>Appended String: $appended_string</p>";
        echo "<p>Reversed String 1 (From " . ucfirst($reverse_position) . "): $string1_reversed</p>";
    }
    ?>
</body>
</html>

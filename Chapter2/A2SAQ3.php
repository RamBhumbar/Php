<?php

function isPalindrome($str) {
   
    $str = strtolower(str_replace(' ', '', $str));

  
    return $str === strrev($str);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputString = $_POST['string'];

    
    $result = isPalindrome($inputString) ? "'$inputString' is a palindrome!" : "'$inputString' is NOT a palindrome.";
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Palindrome Checker</title>
</head>
<body>

<h2>Palindrome Checker</h2>

<form action="A2SAQ3.php" method="POST">
    <label for="string">Enter a String:</label>
    <input type="text" id="string" name="string" required>
    <button type="submit">Check Palindrome</button>
</form>

<?php

if (isset($result)) {
    echo "<h3>$result</h3>";
}
?>

</body>
</html>

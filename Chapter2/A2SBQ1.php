<?php

function numberToWords($num) {
    $num = strval($num); 
    $words = array(
        '0' => 'Zero', '1' => 'One', '2' => 'Two', '3' => 'Three', '4' => 'Four',
        '5' => 'Five', '6' => 'Six', '7' => 'Seven', '8' => 'Eight', '9' => 'Nine'
    );

    $result = '';
    
    
    for ($i = 0; $i < strlen($num); $i++) {
        $result .= $words[$num[$i]] . ' ';
    }

    return trim($result); }


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['number'])) {
    $number = $_POST['number'];

   
    if (is_numeric($number)) {
      
        $words = numberToWords($number);
    } else {
        $words = "Please enter a valid number.";
    }
}
?>

<!DOCTYPE html>
<html >
<head>
   
    <title>Number to Words</title>
</head>
<body>
    <h1>Convert Number to Words</h1>
    
   
    <form action="A2SBQ1.php" method="post">
        <label for="number">Enter a Number:</label>
        <input type="text" id="number" name="number" required>
        <input type="submit" value="Convert">
    </form>

    <?php if (isset($words)) : ?>
        <h2>Converted Result</h2>
        <p><strong>Number:</strong> <?= htmlspecialchars($number) ?></p>
        <p><strong>In Words:</strong> <?= htmlspecialchars($words) ?></p>
    <?php endif; ?>

</body>
</html>

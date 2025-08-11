<?php

function calculate($num1 = 0, $num2 = 0, $operation = 'add') {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            return $num2 != 0 ? $num1 / $num2 : 'Error: Division by zero';
        default:
            return 'Invalid operation';
    } 
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
    $operation = isset($_POST['operation']) ? $_POST['operation'] : 'add';

  
    $result = calculate($num1, $num2, $operation);
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Arithmetic Operation</title>
</head>
<body>
    <h2>Arithmetic Calculator</h2>

   
    <form method="POST">
        <label for="num1">Enter First Number:</label>
        <input type="number" id="num1" name="num1" required><br><br>

        <label for="num2">Enter Second Number:</label>
        <input type="number" id="num2" name="num2" required><br><br>

        <label>Select Operation:</label><br>
        <input type="radio" id="add" name="operation" value="add" checked>
        <label for="add">Add</label><br>
        
        <input type="radio" id="subtract" name="operation" value="subtract">
        <label for="subtract">Subtract</label><br>

        <input type="radio" id="multiply" name="operation" value="multiply">
        <label for="multiply">Multiply</label><br>

        <input type="radio" id="divide" name="operation" value="divide">
        <label for="divide">Divide</label><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>

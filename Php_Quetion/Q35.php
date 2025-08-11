. Write a PHP script for the following: 
a) Design a form to accept two numbers from the users. 
b) Give option to choose an arithmetic operation (use Radio Button). 
c) Display the result on next form. 
d) Use concept of default parameter. 

<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations</title>
</head>
<body>
    <h2>Enter Two Numbers</h2>
    <form action="calculate.php" method="post">
        <label>Number 1:</label>
        <input type="number" name="num1" required><br><br>
        
        <label>Number 2:</label>
        <input type="number" name="num2" required><br><br>
        
        <label>Select Operation:</label><br>
        <input type="radio" name="operation" value="add" checked> Addition<br>
        <input type="radio" name="operation" value="subtract"> Subtraction<br>
        <input type="radio" name="operation" value="multiply"> Multiplication<br>
        <input type="radio" name="operation" value="divide"> Division<br><br>
        
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php
// calculate.php
function calculate($num1, $num2, $operation = 'add') {
    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            return $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
        default:
            return "Invalid operation";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = calculate($num1, $num2, $operation);
    
    echo "<h2>Result</h2>";
    echo "<p>Operation: $operation</p>";
    echo "<p>Result: $result</p>";
}
?>
//Write a PHP script for the following: 
a) Design a form to accept two numbers from the users. 
b) Give option to choose an arithmetic operation (use Radio Button). 
c) Display the result on next form. 
d) Use concept of default parameter.

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    
    function calculate($num1, $num2, $operation = "add") {
        switch ($operation) {
            case "add":
                return $num1 + $num2;
            case "subtract":
                return $num1 - $num2;
            case "multiply":
                return $num1 * $num2;
            case "divide":
                return ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
            default:
                return "Invalid operation";
        }
    }
    
    $result = calculate($num1, $num2, $operation);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations</title>
</head>
<body>
    <h2>Enter Two Numbers</h2>
    <form method="post" action="">
        Number 1: <input type="number" name="num1" required><br>
        Number 2: <input type="number" name="num2" required><br>
        <h3>Select Operation:</h3>
        <input type="radio" name="operation" value="add" checked> Addition<br>
        <input type="radio" name="operation" value="subtract"> Subtraction<br>
        <input type="radio" name="operation" value="multiply"> Multiplication<br>
        <input type="radio" name="operation" value="divide"> Division<br>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($result)) {
        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
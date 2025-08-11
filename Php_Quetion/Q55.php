. Write a PHP script to print following floyd’s triangle. 
A 
B C 
D E F 
G H I J

<?php
function printFloydsTriangle() {
    $rows = 4;
    $char = 'A';
    
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $char . " ";
            $char++;
        }
        echo "<br>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Floyd's Triangle</title>
</head>
<body>
    <h2>Floyd's Triangle</h2>
    <?php printFloydsTriangle(); ?>
</body>
</html>

//1. Write a PHP script to declare three variables and print maximum among them. 

<?php
// PHP script to declare three variables and print the maximum among them

$a = 10;
$b = 25;
$c = 15;

$max = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);

echo "The maximum value among $a, $b, and $c is: $max";
?>

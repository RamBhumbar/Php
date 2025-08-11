Write a PHP script to check number 153 is Armstrong or not.

<?php
// Function to check if a number is an Armstrong number
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    $digits = strlen((string)$num);
    
    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $digits);
        $temp = (int)($temp / 10);
    }
    
    return $sum == $num;
}

// Check if 153 is an Armstrong number
$number = 153;
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>

//Write a PHP script to check number 153 is Armstrong or not. 

<?php
function isArmstrong($number) {
    $sum = 0;
    $digits = str_split($number);
    $numDigits = count($digits);

    foreach ($digits as $digit) {
        $sum += pow($digit, $numDigits);
    }

    return $sum == $number;
}

// Test the function with 153
$number = 153;
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>

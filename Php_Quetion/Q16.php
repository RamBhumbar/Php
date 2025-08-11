//Write a PHP script to check whether accepted number is prime or not. 
<?php
function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Accept input from the user
echo "Enter a number: ";
$number = trim(fgets(STDIN));

if (is_numeric($number) && $number == (int)$number) {
    if (isPrime((int)$number)) {
        echo "$number is a prime number.\n";
    } else {
        echo "$number is not a prime number.\n";
    }
} else {
    echo "Please enter a valid integer.\n";
}
?>
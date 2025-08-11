. Write a PHP script to check whether accepted number is prime or not.

<?php
// Function to check if a number is prime
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

// Accept a number
$number = 29; // You can change this number to test with different values

// Check and display result
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
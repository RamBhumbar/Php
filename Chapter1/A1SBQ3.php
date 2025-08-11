<?php
// Function to check if a number is prime
function isPrime($num) {
    // Prime numbers are greater than 1
    if ($num <= 1) {
        return false;
    }

    
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


$num = 29; 


if (isPrime($num)) {
    echo "$num is a prime number.";
} else {
    echo "$num is not a prime number.";
}
?>

Declare array. Reverse the order of elements, making the first element last and last 
element first and similarly rearranging other array elements.[Hint : array_reverse()] 

<?php
// Declare an array
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Reverse the array
$reversedArray = array_reverse($array);

// Print original and reversed arrays
echo "Original Array: ";
print_r($array);

echo "Reversed Array: ";
print_r($reversedArray);
?>

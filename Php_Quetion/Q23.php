. Declare a Multidimensional Array. Display specific element from a Multidimensional 
array. Also delete given element from the Multidimensional array.(After each operation 
display array content.)

<?php
// Declare a multidimensional array
$multiArray = [
    "Fruits" => ["Apple", "Banana", "Cherry"],
    "Vegetables" => ["Carrot", "Broccoli", "Spinach"],
    "Dairy" => ["Milk", "Cheese", "Yogurt"]
];

// Display specific element
echo "Specific Element: " . $multiArray["Fruits"][1] . "\n";

// Display array content
echo "Original Array:\n";
print_r($multiArray);

// Delete an element
unset($multiArray["Vegetables"][1]);

// Display array after deletion
echo "Array after deleting an element:\n";
print_r($multiArray);
?>
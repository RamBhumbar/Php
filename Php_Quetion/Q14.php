//. Write a menu driven program to perform the following operations on an associative 
array: 
a) Display the elements of an array along with the keys. 
b) Display the size of an array 

<?php
// Define the associative array
$associativeArray = [
    "apple" => "fruit",
    "carrot" => "vegetable",
    "banana" => "fruit",
    "broccoli" => "vegetable"
];

// Function to display the elements along with their keys
function displayElements($array) {
    echo "Array elements:\n";
    foreach ($array as $key => $value) {
        echo "Key: $key, Value: $value\n";
    }
}

// Function to display the size of the array
function displaySize($array) {
    $size = count($array);
    echo "The array contains $size elements.\n";
}

// Function to display the menu
function displayMenu() {
    echo "\nMenu:\n";
    echo "1. Display elements with keys\n";
    echo "2. Display size of the array\n";
    echo "3. Exit\n";
    echo "Enter your choice: ";
}

// Main program loop
while (true) {
    displayMenu();
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            displayElements($associativeArray);
            break;
        case 2:
            displaySize($associativeArray);
            break;
        case 3:
            echo "Exiting program.\n";
            exit();
        default:
            echo "Invalid choice. Please enter 1, 2, or 3.\n";
    }
}
?>

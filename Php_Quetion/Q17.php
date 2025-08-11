Write a menu driven program the following operation on an associative array 
a) Reverse the order of each element’s key-value pair. [Hint: array_flip()] 
b) Traverse the element in an array in random order. [Hint: shuffle()] 

<?php
function displayMenu() {
    echo "\nMenu:\n";
    echo "1. Reverse key-value pairs\n";
    echo "2. Shuffle array\n";
    echo "3. Exit\n";
}

function reverseKeyValue($arr) {
    return array_flip($arr);
}

function shuffleArray(&$arr) {
    shuffle($arr);
}

$associativeArray = [
    "A" => "Apple",
    "B" => "Banana",
    "C" => "Cherry",
    "D" => "Date"
];

do {
    displayMenu();
    echo "Enter your choice: ";
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            $reversedArray = reverseKeyValue($associativeArray);
            print_r($reversedArray);
            break;
        case 2:
            $keys = array_keys($associativeArray);
            shuffleArray($keys);
            $shuffledArray = [];
            foreach ($keys as $key) {
                $shuffledArray[$key] = $associativeArray[$key];
            }
            print_r($shuffledArray);
            break;
        case 3:
            echo "Exiting...\n";
            break;
        default:
            echo "Invalid choice! Please try again.\n";
    }
} while ($choice != 3);
?>
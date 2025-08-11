Write a menu driven program the following operation on an associative array 
c) Reverse the order of each element’s key-value pair. [Hint: array_flip()] 
d) Traverse the element in an array in random order. [Hint: shuffle()

<?php
// Menu-driven program for associative array operations
$associativeArray = [
    "a" => 1,
    "b" => 2,
    "c" => 3,
    "d" => 4
];

while (true) {
    echo "\nMenu:\n1. Reverse key-value pairs\n2. Shuffle elements\n3. Exit\nEnter choice: ";
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            $reversedArray = array_flip($associativeArray);
            print_r($reversedArray);
            break;
        case 2:
            $keys = array_keys($associativeArray);
            shuffle($keys);
            $shuffledArray = [];
            foreach ($keys as $key) {
                $shuffledArray[$key] = $associativeArray[$key];
            }
            print_r($shuffledArray);
            break;
        case 3:
            exit("Exiting program.\n");
        default:
            echo "Invalid choice. Try again.\n";
    }
}
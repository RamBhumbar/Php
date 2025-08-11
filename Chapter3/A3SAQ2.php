<?php


function reverseArray($array) {
    return array_flip($array);
}


function shuffleArray($array) {
    shuffle($array);
    return $array;
}


$array = [
    "first" => "apple",
    "second" => "banana",
    "third" => "cherry",
    "fourth" => "date"
];

function menu()
{
    global $array;
    while(true) {
    echo "\nMenu:\n";
    echo "1. Reverse the order of each element key-value pair\n";
    echo "2. Traverse the element in random order\n";
    echo "3. Exit\n";
    echo "Enter your choice: ";
    $choice = readline("Enter your choice(1/2/3):");

    switch ($choice) {
        case 1:
            
            $reversedArray = reverseArray($array);
            echo "Reversed Array (key-value flipped):\n";
            print_r($reversedArray);
            break;
        case 2:
          
            $shuffledArray = shuffleArray($array);
            echo "Shuffled Array:\n";
            print_r($shuffledArray);
            break;
        case 3:
            echo "Exiting...\n";
            break;
        default:
            echo "Invalid choice, please try again.\n";
            break;
    }

} 
}
menu()

?>

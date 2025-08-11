<?php

function insert(&$stack, $element) {
    array_push($stack, $element);  
    echo "Element $element inserted into the stack.\n";
}


function delete(&$stack) {
    if (empty($stack)) {
        echo "Stack is empty. Cannot delete.\n";
    } else {
        $removed_element = array_pop($stack); 
        echo "Element $removed_element removed from the stack.\n";
    }
}


function display($stack) {
    if (empty($stack)) {
        echo "Stack is empty.\n";
    } else {
        echo "Current Stack: " . implode(", ", $stack) . "\n";
    }
}

function main() {
    $stack = [];

    while (true) {
       
        echo "\nMenu:\n";
        echo "1. Insert element into stack\n";
        echo "2. Delete element from stack\n";
        echo "3. Display stack\n";
        echo "4. Exit\n";
        
        
        $choice = (int)readline("Enter your choice: ");
        
        switch ($choice) {
            case 1:
                $element = (int)readline("Enter element to insert: ");
                insert($stack, $element);
                break;
            case 2:
                delete($stack);
                break;
            case 3:
                display($stack);
                break;
            case 4:
                echo "Exiting the program.\n";
                exit;
            default:
                echo "Invalid choice. Please try again.\n";
        }
    }
}


main();
?>

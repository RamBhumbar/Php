Write a menu driven program to perform the following stack related operations. 
a) Insert an element in stack. 
b) Delete an element from stack.[Hint: array_push(), array_pop()] 
<?php
// Stack implementation using an array
$stack = [];

function pushElement(&$stack, $element) {
    array_push($stack, $element);
    echo "Element $element pushed into the stack.<br>";
}

function popElement(&$stack) {
    if (!empty($stack)) {
        $element = array_pop($stack);
        echo "Element $element popped from the stack.<br>";
    } else {
        echo "Stack is empty. Cannot pop.<br>";
    }
}

function displayStack($stack) {
    echo "Current Stack: ";
    print_r($stack);
    echo "<br>";
}

// Menu-driven program
echo "<h2>Stack Operations</h2>";
pushElement($stack, 10);
pushElement($stack, 20);
pushElement($stack, 30);
displayStack($stack);

popElement($stack);
displayStack($stack);

popElement($stack);
displayStack($stack);
?>
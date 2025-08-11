Write a menu driven program to perform the following queue related operations 
a) Insert an element in queue 
b) Delete an element from queue 
c) Display the contents of queue

<?php
// Queue implementation using an array
$queue = [];

function enqueue(&$queue, $element) {
    array_push($queue, $element);
    echo "Element $element inserted into the queue.<br>";
}

function dequeue(&$queue) {
    if (!empty($queue)) {
        $element = array_shift($queue);
        echo "Element $element removed from the queue.<br>";
    } else {
        echo "Queue is empty. Cannot dequeue.<br>";
    }
}

function displayQueue($queue) {
    echo "Current Queue: ";
    print_r($queue);
    echo "<br>";
}

// Menu-driven operations
echo "<h2>Queue Operations</h2>";
enqueue($queue, 10);
enqueue($queue, 20);
enqueue($queue, 30);
displayQueue($queue);

dequeue($queue);
displayQueue($queue);

dequeue($queue);
displayQueue($queue);
?>
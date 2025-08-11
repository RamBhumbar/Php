<?php


interface QueueInterface {
    public function enqueue($item); 
    public function dequeue();       
    public function isEmpty();       
    public function peek();          
    public function size();         
}

// Step 2: Implement the QueueInterface in the Queue class
class Queue implements QueueInterface {
    private $queue = [];

    // Add an item to the queue
    public function enqueue($item) {
        array_push($this->queue, $item);
    }

    // Remove and return the front item of the queue
    public function dequeue() {
        if (!$this->isEmpty()) {
            return array_shift($this->queue);
        } else {
            echo "Queue is empty!<br>";
            return null;
        }
    }

    // Check if the queue is empty
    public function isEmpty() {
        return empty($this->queue);
    }

    // Return the front item without removing it
    public function peek() {
        if (!$this->isEmpty()) {
            return $this->queue[0];
        } else {
            echo "Queue is empty!<br>";
            return null;
        }
    }

    // Return the size of the queue
    public function size() {
        return count($this->queue);
    }

    // Method to display the queue contents (for testing purposes)
    public function display() {
        echo "Queue: " . implode(", ", $this->queue) . "<br>";
    }
}


$queue = new Queue();


$queue->enqueue(10);
$queue->enqueue(20);
$queue->enqueue(30);

// Display the queue
$queue->display(); // Output: Queue: 10, 20, 30

// Peek the front item
echo "Peek: " . $queue->peek() . "<br>";  // Output: Peek: 10

// Dequeue an item
echo "Dequeue: " . $queue->dequeue() . "<br>";  // Output: Dequeue: 10

// Display the queue after dequeue
$queue->display(); // Output: Queue: 20, 30

// Check if the queue is empty
echo "Is queue empty? " . ($queue->isEmpty() ? "Yes" : "No") . "<br>";  // Output: No

// Display the size of the queue
echo "Size of the queue: " . $queue->size() . "<br>";  // Output: Size of the queue: 2

?>

2. Write a menu driven program to perform the following queue related operations 
d) Insert an element in queue 
e) Delete an element from queue 
f) Display the contents of queue 

<?php
session_start();

if (!isset($_SESSION['queue'])) {
    $_SESSION['queue'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['enqueue'])) {
        $element = $_POST['element'];
        array_push($_SESSION['queue'], $element);
    } elseif (isset($_POST['dequeue'])) {
        if (!empty($_SESSION['queue'])) {
            array_shift($_SESSION['queue']);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Queue Operations</title>
</head>
<body>
    <h2>Queue Operations</h2>
    <form method="post">
        <label>Enter Element to Enqueue:</label>
        <input type="text" name="element" required>
        <button type="submit" name="enqueue">Enqueue</button>
        <button type="submit" name="dequeue">Dequeue</button>
    </form>
    <h3>Current Queue:</h3>
    <pre><?php print_r($_SESSION['queue']); ?></pre>
</body>
</html>

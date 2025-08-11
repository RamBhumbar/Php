Write a menu driven program to perform the following stack related operations. 
c) Insert an element in stack. 
d) Delete an element from stack.[Hint: array_push(), array_pop()]

<?php
session_start();

if (!isset($_SESSION['stack'])) {
    $_SESSION['stack'] = [];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['push'])) {
        $element = $_POST['element'];
        array_push($_SESSION['stack'], $element);
    } elseif (isset($_POST['pop'])) {
        if (!empty($_SESSION['stack'])) {
            array_pop($_SESSION['stack']);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stack Operations</title>
</head>
<body>
    <h2>Stack Operations</h2>
    <form method="post">
        <label>Enter Element to Push:</label>
        <input type="text" name="element" required>
        <button type="submit" name="push">Push</button>
        <button type="submit" name="pop">Pop</button>
    </form>
    <h3>Current Stack:</h3>
    <pre><?php print_r($_SESSION['stack']); ?></pre>
</body>
</html>

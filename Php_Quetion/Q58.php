Write a PHP script to display source code of a webpage. 
<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $source_code = file_get_contents($url);
    if ($source_code !== false) {
        echo "<h2>Source Code of: " . htmlspecialchars($url) . "</h2>";
        echo "<pre>" . htmlspecialchars($source_code) . "</pre>";
    } else {
        echo "<p>Unable to fetch source code.</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Display Webpage Source Code</title>
</head>
<body>
    <h2>Enter URL to Display Source Code</h2>
    <form method="get">
        <label>URL:</label>
        <input type="text" name="url" required>
        <button type="submit">Get Source Code</button>
    </form>
</body>
</html>

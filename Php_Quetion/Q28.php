Write a PHP script to display source code of a webpage. 

<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    $sourceCode = file_get_contents($url);
    echo "<h2>Source Code of $url</h2>";
    echo "<pre>" . htmlspecialchars($sourceCode) . "</pre>";
} else {
    echo "<h2>Enter a URL to Display Source Code</h2>";
    echo '<form method="get">
            <label for="url">Website URL:</label>
            <input type="text" name="url" required>
            <button type="submit">Get Source Code</button>
          </form>';
}
?>
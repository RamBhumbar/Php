<!DOCTYPE html>
<html>
<head>
    
    <title>Reverse String Form</title>
</head>
<body>

    <h2>Enter a string to reverse:</h2>

    <form method="POST" action="A2SAQ2.php">
        <label for="inputString">String:</label>
        <input type="text" id="inputString" name="inputString" required>
        <button type="submit" name="Validation">Reverse String</button>
    </form>

    <?php
       
       
       if (isset($_POST['Validation']))  {
            $inputString = $_POST['inputString'];  
            echo "<h3>Reversed String: " . reverseString($inputString) . "</h3>";
        }

     
        function reverseString($string) {
            return strrev($string);
        }
    ?>

</body>
</html>

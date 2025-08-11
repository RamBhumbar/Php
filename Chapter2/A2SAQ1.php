<!DOCTYPE html>
<html>
<head>
  
   
    <title>Factorial Calculator</title>
</head>
<body>

    <h2>Enter a number to calculate its factorial:</h2>

    <form method="POST" action="A2SAQ1.php">
        <label for="number">Number:</label>
        <input type="number" id="number" name="number" required min="0">
        <button type="submit" name="submit">Calculate Factorial</button>
    </form>

    <?php
      
        if ( isset($_POST['submit'])) {
            $number = $_POST['number']; 
            
           
            echo "<h3>Factorial of $number is: " . factorial($number) . "</h3>";
        }

        
        function factorial($num) {
            if ($num == 0 || $num == 1) {
                return 1;
            } else {
                return $num * factorial($num - 1); 
            }
        }
    ?>

</body>
</html>

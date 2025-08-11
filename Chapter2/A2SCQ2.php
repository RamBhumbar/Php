<!DOCTYPE html>
<html>
<head>
 
    <title>Item Bill Form</title>
</head>
<body>

    <h2>Enter Details of 5 Items</h2>

    <form method="post" action="">
        <label for="items">Enter Item Details (comma separated for each item):</label><br>
        <input type="text" id="items" name="items" placeholder="itemCode,itemName,unitsSold,rate" size="50"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $input = $_POST['items'];
        
      
        $itemDetails = explode(",", $input);

        
        if(count($itemDetails) == 20) {
            echo "<h3>Bill Details:</h3>";
            echo "<table border='1'>";
            echo "<tr><th>Item Code</th><th>Item Name</th><th>Units Sold</th><th>Rate</th><th>Total</th></tr>";

            for ($i = 0; $i < 20; $i += 4) {
                $itemCode = $itemDetails[$i];
                $itemName = $itemDetails[$i+1];
                $unitsSold = (int)$itemDetails[$i+2];
                $rate = (float)$itemDetails[$i+3];
                $total = $unitsSold * $rate;
                
                echo "<tr>
                        <td>{$itemCode}</td>
                        <td>{$itemName}</td>
                        <td>{$unitsSold}</td>
                        <td>{$rate}</td>
                        <td>{$total}</td>
                      </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Please enter 5 items, each with 4 details (itemCode, itemName, unitsSold, rate), separated by commas.</p>";
        }
    }
    ?>

</body>
</html>

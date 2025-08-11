Write a PHP script for the following: Design a form to accept the details of 5 different 
items, such as item code, item name, units sold, rate. Display the bill in the tabular format. 
Use only 4 text boxes. (Hint : Use of explode function.)

<!DOCTYPE html>
<html>
<head>
    <title>Item Bill Form</title>
</head>
<body>
    <h2>Enter Item Details</h2>
    <form method="post" action="">
        <label>Enter item details (Item Code, Item Name, Units Sold, Rate) separated by commas:</label><br>
        <input type="text" name="item1" required><br>
        <input type="text" name="item2" required><br>
        <input type="text" name="item3" required><br>
        <input type="text" name="item4" required><br>
        <input type="text" name="item5" required><br>
        <br>
        <input type="submit" name="submit" value="Generate Bill">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        echo "<h2>Bill</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Item Code</th><th>Item Name</th><th>Units Sold</th><th>Rate</th><th>Total</th></tr>";
        
        $totalBill = 0;
        for ($i = 1; $i <= 5; $i++) {
            if (!empty($_POST["item$i"])) {
                $itemDetails = explode(",", $_POST["item$i"]);
                if (count($itemDetails) == 4) {
                    list($code, $name, $units, $rate) = $itemDetails;
                    $total = $units * $rate;
                    $totalBill += $total;
                    echo "<tr><td>$code</td><td>$name</td><td>$units</td><td>$rate</td><td>$total</td></tr>";
                }
            }
        }
        
        echo "<tr><td colspan='4' align='right'><strong>Grand Total:</strong></td><td><strong>$totalBill</strong></td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>

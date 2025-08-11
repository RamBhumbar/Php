//Write a PHP script for the following: Design a form to accept the details of 5 different 
items, such as item code, item name, units sold, rate. Display the bill in the tabular format. 
Use only 4 text boxes. (Hint : Use of explode function.) 

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $item_codes = explode(",", $_POST['item_code']);
    $item_names = explode(",", $_POST['item_name']);
    $units_sold = explode(",", $_POST['units_sold']);
    $rates = explode(",", $_POST['rate']);
    
    echo "<h2>Bill Details</h2>";
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Item Code</th><th>Item Name</th><th>Units Sold</th><th>Rate</th><th>Total</th></tr>";
    
    $grand_total = 0;
    for ($i = 0; $i < count($item_codes); $i++) {
        $total = $units_sold[$i] * $rates[$i];
        $grand_total += $total;
        echo "<tr>
                <td>{$item_codes[$i]}</td>
                <td>{$item_names[$i]}</td>
                <td>{$units_sold[$i]}</td>
                <td>{$rates[$i]}</td>
                <td>{$total}</td>
              </tr>";
    }
    echo "<tr><td colspan='4'><b>Grand Total</b></td><td><b>{$grand_total}</b></td></tr>";
    echo "</table>";
} else {
?>
    <form method="post">
        <label>Item Codes (comma-separated): </label><input type="text" name="item_code" required><br>
        <label>Item Names (comma-separated): </label><input type="text" name="item_name" required><br>
        <label>Units Sold (comma-separated): </label><input type="text" name="units_sold" required><br>
        <label>Rates (comma-separated): </label><input type="text" name="rate" required><br>
        <input type="submit" value="Generate Bill">
    </form>
<?php
}
?>

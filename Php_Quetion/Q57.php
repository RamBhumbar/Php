2. Sales_order (sonumber, s_order_date) 
d. Client (clientno, name, address) 
e. A client can give one or more sales_orders, but a sales_order belongs to exactly 
one client. 
f. Accept sales order date from the user. Write a PHP script which will display all 
orders which are placed before that date.

<?php
$host = "localhost";
$port = "5432";
$dbname = "your_database";
$user = "your_username";
$password = "your_password";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_date = $_POST["order_date"];
    $query = "SELECT so.sonumber, so.s_order_date, c.clientno, c.name, c.address 
              FROM Sales_order so 
              JOIN Client c ON so.clientno = c.clientno 
              WHERE so.s_order_date < $1";
    
    $result = pg_query_params($conn, $query, array($order_date));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sales Orders</title>
</head>
<body>
    <h2>Search Sales Orders Before Given Date</h2>
    <form method="post">
        <label>Enter Sales Order Date:</label>
        <input type="date" name="order_date" required>
        <button type="submit">Search</button>
    </form>
    
    <?php if (isset($result) && pg_num_rows($result) > 0): ?>
        <h3>Sales Orders Before <?php echo htmlspecialchars($order_date); ?>:</h3>
        <table border="1">
            <tr>
                <th>Sales Order Number</th>
                <th>Order Date</th>
                <th>Client Number</th>
                <th>Client Name</th>
                <th>Address</th>
            </tr>
            <?php while ($row = pg_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['sonumber']); ?></td>
                    <td><?php echo htmlspecialchars($row['s_order_date']); ?></td>
                    <td><?php echo htmlspecialchars($row['clientno']); ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['address']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php elseif (isset($result)): ?>
        <p>No orders found before <?php echo htmlspecialchars($order_date); ?>.</p>
    <?php endif; ?>
    
    <?php pg_close($conn); ?>
</body>
</html>
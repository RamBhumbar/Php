2. Sales_order (sonumber, s_order_date) 
a. Client (clientno, name, address) 
b. A client can give one or more sales_orders, but a sales_order belongs to exactly 
one client. 
c. Accept sales order date from the user. Write a PHP script which will display all 
orders which are placed before that date. 
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sales_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order_date = $_POST["order_date"];
    
    $sql = "SELECT so.sonumber, so.s_order_date, c.clientno, c.name, c.address 
            FROM Sales_order so 
            JOIN Client c ON so.clientno = c.clientno 
            WHERE so.s_order_date < ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $order_date);
    $stmt->execute();
    $result = $stmt->get_result();
    
    echo "<h2>Sales Orders Before $order_date</h2>";
    if ($result->num_rows > 0) {
        echo "<table border='1'><tr><th>Order Number</th><th>Order Date</th><th>Client Number</th><th>Client Name</th><th>Address</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['sonumber']}</td><td>{$row['s_order_date']}</td><td>{$row['clientno']}</td><td>{$row['name']}</td><td>{$row['address']}</td></tr>";
        }
        echo "</table>";
    } else {
        echo "No orders found before the given date.";
    }
    
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sales Orders Before Date</title>
</head>
<body>
    <h2>Enter a Date to Find Sales Orders Before That Date</h2>
    <form method="post" action="">
        <label for="order_date">Order Date:</label>
        <input type="date" name="order_date" required>
        <button type="submit">Search</button>
    </form>
</body>
</html>
. Property (pno, description, area) 
a. Owner (oname, address, phone) 
b. An owner can have one or more properties, but a property belongs to exactly one 
owner. 
c. Accept owner name from the user. Write a PHP script which will display all 
properties which are own by that owner. 

<!DOCTYPE html>
<html>
<head>
    <title>Owner Properties</title>
</head>
<body>
    <h2>Search Properties by Owner</h2>
    <form method="post">
        <label>Enter Owner Name:</label>
        <input type="text" name="owner_name" required>
        <button type="submit">Search</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $owner_name = $_POST["owner_name"];
        
        $host = "localhost";
        $port = "5432";
        $dbname = "your_database";
        $user = "your_username";
        $password = "your_password";
        
        $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
        if (!$conn) {
            die("Connection failed: " . pg_last_error());
        }
        
        $query = "SELECT p.pno, p.description, p.area FROM Property p 
                  JOIN Owner o ON p.owner_id = o.id 
                  WHERE o.oname = $1";
        
        $result = pg_query_params($conn, $query, array($owner_name));
        
        if (pg_num_rows($result) > 0) {
            echo "<h3>Properties owned by $owner_name:</h3>";
            echo "<table border='1'>
                    <tr>
                        <th>Property Number</th>
                        <th>Description</th>
                        <th>Area</th>
                    </tr>";
            while ($row = pg_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['pno']}</td>
                        <td>{$row['description']}</td>
                        <td>{$row['area']}</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No properties found for owner: $owner_name</p>";
        }
        
        pg_close($conn);
    }
    ?>
</body>
</html>
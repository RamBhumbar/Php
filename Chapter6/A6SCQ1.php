. Write a AJAX program to print Teacher information from postgreSQL table Teacher. 
Teacher (Tno, Name, Subject, Research area) 

<!DOCTYPE html>
<html>
<head>
    <title>Teacher Information</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function fetchTeachers() {
            $.ajax({
                url: "fetch_teachers.php",
                method: "GET",
                success: function(response) {
                    $("#teacherInfo").html(response);
                }
            });
        }
    </script>
</head>
<body>
    <h2>Teacher Information</h2>
    <button onclick="fetchTeachers()">Load Teachers</button>
    <div id="teacherInfo"></div>
</body>
</html>

<?php
// fetch_teachers.php
$host = "localhost";
$port = "5432";
$dbname = "your_database";
$user = "your_username";
$password = "your_password";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

$query = "SELECT * FROM Teacher";
$result = pg_query($conn, $query);

if (pg_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                <th>Tno</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Research Area</th>
            </tr>";
    while ($row = pg_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['tno']}</td>
                <td>{$row['name']}</td>
                <td>{$row['subject']}</td>
                <td>{$row['research_area']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}
pg_close($conn);
?>

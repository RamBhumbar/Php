Write a PHP script to display student information on web page. 

<?php
// Student information array
$students = [
    ["id" => 1, "name" => "John Doe", "age" => 20, "course" => "BCA"],
    ["id" => 2, "name" => "Jane Smith", "age" => 21, "course" => "MCA"],
    ["id" => 3, "name" => "Robert Brown", "age" => 22, "course" => "BSc IT"],
    ["id" => 4, "name" => "Emily Davis", "age" => 23, "course" => "B.Tech"],
    ["id" => 5, "name" => "Michael Wilson", "age" => 24, "course" => "M.Tech"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>
    <h2>Student Information</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
        </tr>
        <?php foreach ($students as $student) { ?>
        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['age']; ?></td>
            <td><?php echo $student['course']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
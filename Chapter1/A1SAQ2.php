<?php

$student = [
    'name' => 'Ram Bhumbar',
    'age' => 19,
    'student_id' => 'S12345',
    'course' => 'BCA',
    'year' => '2nd Year',
    'email' => 'rambhumbar@gmail.com'
];

?>

<!DOCTYPE html>
<html lang>
<head>
    
    <title>Student Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .student-info {
            list-style-type: none;
            padding: 0;
        }
        .student-info li {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        .student-info li:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Student Information</h1>
        <ul class="student-info">
            <li><span class="label">Name:</span> <?php echo $student['name']; ?></li>
            <li><span class="label">Age:</span> <?php echo $student['age']; ?></li>
            <li><span class="label">Student ID:</span> <?php echo $student['student_id']; ?></li>
            <li><span class="label">Course:</span> <?php echo $student['course']; ?></li>
            <li><span class="label">Year:</span> <?php echo $student['year']; ?></li>
            <li><span class="label">Email:</span> <?php echo $student['email']; ?></li>
        </ul>
    </div>

</body>
</html>

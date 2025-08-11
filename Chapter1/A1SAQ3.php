<!DOCTYPE html>
<html>
<head>
    
    <title>Class Timetable</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            border: 1px solid #000;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            background-color: #e9f7fb;
        }
    </style>
</head>
<body>

    <h1 style="text-align: center;">My Class Timetable</h1>

    <?php
    echo "<table>";
    echo "<tr><th>Time</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th></tr>";
    echo "<tr><td>9:00 AM - 10:00 AM</td><td>Math</td><td>Science</td><td>History</td><td>Math</td><td>English</td></tr>";
    echo "<tr><td>10:00 AM - 11:00 AM</td><td>English</td><td>Math</td><td>Physics</td><td>Chemistry</td><td>History</td></tr>";
    echo "<tr><td>11:00 AM - 12:00 PM</td><td>History</td><td>Geography</td><td>Math</td><td>Physics</td><td>Science</td></tr>";
    echo "<tr><td>12:00 PM - 1:00 PM</td><td>Lunch Break</td><td>Lunch Break</td><td>Lunch Break</td><td>Lunch Break</td><td>Lunch Break</td></tr>";
  ?>

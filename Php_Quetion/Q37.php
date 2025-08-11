Write a PHP script to script to display time table of your class( use HTML table tags in

<!DOCTYPE html>
<html>
<head>
    <title>Class Timetable</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Class Timetable</h2>
    <table>
        <tr>
            <th>Day/Time</th>
            <th>9:00 - 10:00</th>
            <th>10:00 - 11:00</th>
            <th>11:00 - 12:00</th>
            <th>12:00 - 1:00</th>
            <th>1:00 - 2:00</th>
            <th>2:00 - 3:00</th>
            <th>3:00 - 4:00</th>
        </tr>
        <tr>
            <td>Monday</td>
            <td>Math</td>
            <td>Science</td>
            <td>English</td>
            <td rowspan="5">Lunch</td>
            <td>Physics</td>
            <td>Chemistry</td>
            <td>Computer Science</td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td>History</td>
            <td>Geography</td>
            <td>Biology</td>
            <td>English</td>
            <td>Physics</td>
            <td>Math</td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td>Computer Science</td>
            <td>Math</td>
            <td>Science</td>
            <td>Chemistry</td>
            <td>English</td>
            <td>Biology</td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td>Physics</td>
            <td>History</td>
            <td>Computer Science</td>
            <td>Math</td>
            <td>Science</td>
            <td>Geography</td>
        </tr>
        <tr>
            <td>Friday</td>
            <td>Chemistry</td>
            <td>English</td>
            <td>Math</td>
            <td>Biology</td>
            <td>Computer Science</td>
            <td>Physics</td>
        </tr>
    </table>
</body>
</html>
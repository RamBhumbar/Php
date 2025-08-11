//1. Write a PHP script to script to display time table of your class( use HTML table tags in 
echo).

<?php
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    echo "<tr><th>Day</th><th>9:00 - 10:00</th><th>10:00 - 11:00</th><th>11:00 - 12:00</th><th>12:00 - 1:00</th><th>2:00 - 3:00</th><th>3:00 - 4:00</th></tr>";
    
    $timetable = [
        "Monday" => ["Math", "Science", "English", "Break", "Computer", "History"],
        "Tuesday" => ["Physics", "Chemistry", "Math", "Break", "Biology", "Sports"],
        "Wednesday" => ["English", "History", "Geography", "Break", "Computer", "Math"],
        "Thursday" => ["Biology", "Physics", "Chemistry", "Break", "Math", "English"],
        "Friday" => ["Computer", "Math", "Science", "Break", "History", "Sports"],
    ];
    
    foreach ($timetable as $day => $subjects) {
        echo "<tr><td>$day</td>";
        foreach ($subjects as $subject) {
            echo "<td>$subject</td>";
        }
        echo "</tr>";
    }
    
    echo "</table>";
?>

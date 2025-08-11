. Write a AJAX program to search Student name according to the character typed and 
display list using array
<!-- index.html -->
<!DOCTYPE html>
<html>
<head>
    <title>AJAX Student Search</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#search").keyup(function(){
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: "search.php",
                        method: "POST",
                        data: {query: query},
                        success: function(data) {
                            $("#studentList").html(data);
                        }
                    });
                } else {
                    $("#studentList").html("");
                }
            });
        });
    </script>
</head>
<body>
    <h2>Search Student</h2>
    <input type="text" id="search" placeholder="Type a name...">
    <ul id="studentList"></ul>
</body>
</html>

<!-- search.php -->
<?php
$students = ["Alice", "Bob", "Charlie", "David", "Eve", "Frank", "Grace", "Hank", "Ivy", "Jack"];

if (isset($_POST['query'])) {
    $query = strtolower($_POST['query']);
    $results = array_filter($students, function ($name) use ($query) {
        return strpos(strtolower($name), $query) !== false;
    });

    foreach ($results as $student) {
        echo "<li>" . htmlspecialchars($student) . "</li>";
    }
}
?>

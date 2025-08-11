//Write AJAX program to read a text file and print the contents of the file when the user 
clicks on the Print button. 

<!DOCTYPE html>
<html>
<head>
    <title>AJAX Read File</title>
    <script>
        function loadFile() {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "sample.txt", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("fileContent").innerText = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <h2>Read Text File using AJAX</h2>
    <button onclick="loadFile()">Print</button>
    <pre id="fileContent"></pre>
</body>
</html>

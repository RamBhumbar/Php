. Design a HTML form to accept a string. Write a PHP script for the following. 
a) Write a function to count the total number of Vowels from the script. 
 
b) Show the occurrences of each Vowel from the script. 

<!DOCTYPE html>
<html>
<head>
    <title>Vowel Counter</title>
</head>
<body>
    <h2>Enter a String</h2>
    <form method="post">
        <input type="text" name="inputString" required>
        <button type="submit">Submit</button>
    </form>
    
    <?php
    function countVowels($string) {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $string = strtolower($string);
        $totalVowelCount = 0;
        $vowelOccurrences = array_fill_keys($vowels, 0);
        
        foreach (str_split($string) as $char) {
            if (in_array($char, $vowels)) {
                $totalVowelCount++;
                $vowelOccurrences[$char]++;
            }
        }
        
        return [$totalVowelCount, $vowelOccurrences];
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputString = $_POST['inputString'];
        list($totalVowels, $vowelOccurrences) = countVowels($inputString);
        
        echo "<h3>Results:</h3>";
        echo "Total number of vowels: " . $totalVowels . "<br>";
        echo "Occurrences of each vowel:<br>";
        foreach ($vowelOccurrences as $vowel => $count) {
            echo strtoupper($vowel) . ": " . $count . "<br>";
        }
    }
    ?>
</body>
</html>
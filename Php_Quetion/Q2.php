// Design a HTML form to accept a string. Write a PHP script for the following. 
//a) Write a function to count the total number of Vowels from the script. 
 
//b) Show the occurrences of each Vowel from the script. 

<!DOCTYPE html>
<html>
<head>
    <title>Vowel Counter</title>
</head>
<body>
    <form method="post">
        <label>Enter a string:</label>
        <input type="text" name="inputString" required>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $inputString = strtolower($_POST['inputString']);

        function countVowels($str) {
            return preg_match_all('/[aeiou]/', $str);
        }

        function vowelOccurrences($str) {
            $vowels = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];
            foreach (str_split($str) as $char) {
                if (array_key_exists($char, $vowels)) {
                    $vowels[$char]++;
                }
            }
            return $vowels;
        }

        echo "<h3>Total Vowels: " . countVowels($inputString) . "</h3>";

        $occurrences = vowelOccurrences($inputString);
        echo "<h3>Occurrences of each vowel:</h3><ul>";
        foreach ($occurrences as $vowel => $count) {
            echo "<li>$vowel : $count</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>

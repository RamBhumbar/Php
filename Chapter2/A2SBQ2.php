<?php

function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    $vowelCount = ['a' => 0, 'e' => 0, 'i' => 0, 'o' => 0, 'u' => 0];

    
    $str = strtolower($str);

   
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
            $vowelCount[$str[$i]]++;
        }
    }

    return ['totalVowels' => $count, 'vowelOccurrences' => $vowelCount];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['inputString'])) {
    $inputString = $_POST['inputString'];

    
    $result = countVowels($inputString);
    $totalVowels = $result['totalVowels'];
    $vowelOccurrences = $result['vowelOccurrences'];
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Vowel Counter</title>
</head>
<body>
    <h1>Vowel Counter</h1>
    
   
    <form action="A2SBQ2.php" method="post">
        <label for="inputString">Enter a String:</label>
        <textarea id="inputString" name="inputString" rows="4" cols="50" required></textarea>
        <br><br>
        <input type="submit" value="Count Vowels">
    </form>

    <?php if (isset($totalVowels)) : ?>
        <h2>Results</h2>
        <p><strong>Total Vowels: </strong> <?= $totalVowels ?></p>
        <p><strong>Occurrences of Each Vowel:</strong></p>
        <ul>
            <?php foreach ($vowelOccurrences as $vowel => $count) : ?>
                <li><strong><?= strtoupper($vowel) ?>:</strong> <?= $count ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</body>
</html>

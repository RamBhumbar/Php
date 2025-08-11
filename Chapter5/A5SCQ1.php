. Write a PHP script to following xml file. 
<cricket> 
<player> abe</player> 
<rums>100</runs> 
<wickets>20</wickets> 
</cricket> 
Store data for 5 players and display data of players who have scored more than 100 runs.

<?php
$xmlData = '<?xml version="1.0" encoding="UTF-8"?>
<cricket>
    <player>
        <name>Abe</name>
        <runs>100</runs>
        <wickets>20</wickets>
    </player>
    <player>
        <name>Bob</name>
        <runs>150</runs>
        <wickets>15</wickets>
    </player>
    <player>
        <name>Charlie</name>
        <runs>90</runs>
        <wickets>10</wickets>
    </player>
    <player>
        <name>David</name>
        <runs>200</runs>
        <wickets>5</wickets>
    </player>
    <player>
        <name>Edward</name>
        <runs>120</runs>
        <wickets>8</wickets>
    </player>
</cricket>';

// Save XML data to a file
file_put_contents("cricket.xml", $xmlData);

echo "XML file created successfully.<br><br>Displaying players with more than 100 runs:<br>";

// Load XML file
$xml = simplexml_load_file("cricket.xml");
foreach ($xml->player as $player) {
    if ((int)$player->runs > 100) {
        echo "Name: " . $player->name . " - Runs: " . $player->runs . " - Wickets: " . $player->wickets . "<br>";
    }
}
?>

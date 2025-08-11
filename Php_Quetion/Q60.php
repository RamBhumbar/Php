Q2. Write a PHP script to following xml file. 
<cricket> 
<player> abe</player> 
<rums>100</runs> 
<wickets>20</wickets> 
</cricket> 
Store data for 5 players and display data of players who have scored more than 100 runs. 


<?php
// Create XML file with player data
$xml = new SimpleXMLElement("<cricket></cricket>");

$players = [
    ["name" => "Abe", "runs" => 100, "wickets" => 20],
    ["name" => "Ben", "runs" => 120, "wickets" => 10],
    ["name" => "Chris", "runs" => 90, "wickets" => 5],
    ["name" => "David", "runs" => 150, "wickets" => 25],
    ["name" => "Ethan", "runs" => 110, "wickets" => 15]
];

foreach ($players as $player) {
    $playerNode = $xml->addChild("player");
    $playerNode->addChild("name", $player["name"]);
    $playerNode->addChild("runs", $player["runs"]);
    $playerNode->addChild("wickets", $player["wickets"]);
}

$file = "players.xml";
$xml->asXML($file);

// Load and display players with more than 100 runs
$xml = simplexml_load_file($file);

echo "<h2>Players with more than 100 runs</h2>";
echo "<table border='1'>
<tr><th>Name</th><th>Runs</th><th>Wickets</th></tr>";
foreach ($xml->player as $player) {
    if ((int)$player->runs > 100) {
        echo "<tr>
              <td>{$player->name}</td>
              <td>{$player->runs}</td>
              <td>{$player->wickets}</td>
              </tr>";
    }
}
echo "</table>";
?>
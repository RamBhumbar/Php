<?php

$rows = 5; 

$number = 1; 


for ($i = 1; $i <= $rows; $i++) {
   
    for ($j = 1; $j <= $i; $j++) {
        echo $number . " "; 
        $number++; 
    }
    echo "<br>"; 
}
?>

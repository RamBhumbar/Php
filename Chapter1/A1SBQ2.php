<?php
$num = 153;


$digits = strlen((string)$num);


$sum = 0;
$temp = $num;


while ($temp > 0) {
    
    $digit = $temp % 10;
    
  
    $sum += pow($digit, $digits);
    
    
    $temp = (int)($temp / 10);
}


if ($sum == $num) {
    echo "$num is an Armstrong number.";
} else {
    echo "$num is not an Armstrong number.";
}
?>

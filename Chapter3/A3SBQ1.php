<?php
$car=array(
    array("volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo $car[0][1];
unset($car[0][1]);
print_r($car);
?>


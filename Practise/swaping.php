<?php
if(isset($_POST['go']))
$x=$_POST["x"];
$y=$_POST["y"];
$z;
echo"Before swapping number are";
echo"<br>";
echo$x;
echo$y;
echo"<br>";
$z=$x;
$x=$y;
$y=$z;
echo"after swapping number are";
echo"<br>";
echo$x;
echo$y;
?>
<?php
$index_array=array("Volvo","BMW","Toyota");
function reverse($index_array) {
 $new_array=array_reverse($index_array);
 print_r($new_array);
}
reverse($index_array);
?>
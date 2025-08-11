// Write a menu driven program to perform the following operations on associative arrays: 
 
 a) Merge the given arrays. 
  
 b) Find the intersection of two arrays. 
  
 c) Find the union of two arrays. 
  
 d) Find set difference of two arrays. 


 <?php
function mergeArrays($arr1, $arr2) {
    return array_merge($arr1, $arr2);
}

function intersectArrays($arr1, $arr2) {
    return array_intersect_assoc($arr1, $arr2);
}

function unionArrays($arr1, $arr2) {
    return array_unique(array_merge($arr1, $arr2));
}

function differenceArrays($arr1, $arr2) {
    return array_diff_assoc($arr1, $arr2);
}

$arr1 = ["a" => 1, "b" => 2, "c" => 3];
$arr2 = ["b" => 2, "c" => 4, "d" => 5];

echo "<h3>Merged Array:</h3><pre>";
print_r(mergeArrays($arr1, $arr2));

echo "</pre><h3>Intersection:</h3><pre>";
print_r(intersectArrays($arr1, $arr2));

echo "</pre><h3>Union:</h3><pre>";
print_r(unionArrays($arr1, $arr2));

echo "</pre><h3>Set Difference:</h3><pre>";
print_r(differenceArrays($arr1, $arr2));
?>

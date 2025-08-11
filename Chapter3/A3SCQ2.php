<?php

function sortArrayAscending($array)
{
    asort($array);
    return $array;
}

function sortArrayDescending($array)
{
    arsort($array);
    return  $array;
}
function sortByKeysAcsending($array)
{
    ksort($array);
    return $array;
}
function sortByKeysDescending($array)
{
    krsort($array);
    return $array;
}
function my_sort($value)
{
    return $value %2!==0;
}
$array=[
    "a"=>2,
    "b"=>5,
    "c"=>9,
    "d"=>4,
    "e"=>3,
];
do{
echo"\n Menu: \n";
echo "1. Sort the array by keys accending \n";
echo "2. Sort the array by keys descending \n";
echo "3. Sort the array by values ascending \n";
echo "4. Sort the array by values descending \n";
echo "5. Filter the odd elements from the array \n";
echo "6: Exit";
echo "Enter your choice:";
$choice=readline("enter your choice:");

switch($choice)
{
case 1:
    echo "sorted Array by keys:\n";
    print_r(sortByKeysAcsending($array));    
    break;

case 2:
    echo "sorted array by keys:\n";
    print_r(sortByKeysDescending($array));
    break;

case 3:
    echo "sorted array in Ascending order by values\n";
    print_r(sortArrayAscending($array));
    break;

case 4:
    echo "sorted array in Descending order by values\n";
    print_r(sortArrayDescending($array));
    break;

case 5:
    echo "Oddd element from the array:\n";
    print_r(array_filter($array,'my_sort'));
    break;
case 6:
    echo "Exiting...\n";
    break;
    default:
    echo "invalid choice. please try again.\n";

}

} while ($choice !=5);

?> 
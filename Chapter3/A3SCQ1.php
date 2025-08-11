<?php
function mergeArrays($array1, $array2)
{
    return array_merge($array1,$array2);
}

function intersection($array1,$array2)
{
    return array_intersect($array1,$array2);
}

function union($array1,$array2)
{
return array_merge($array1,$array2);    
}

function setdifference($array1,$array2)
{
    return array_diff($array1,$array2);
}

$array1=[
    "a"=>"apple",
    "b"=>"banana",
    "c"=>"cherry"
];

$array2=[
    "b"=>"banana",
    "c"=>"cherry",
    "d"=>"date"
];

do{
    echo"\nMenu:\n";
    echo "1. Merge the given array\n";
    echo "2. Find the intersection of two arrays\n";
    echo "3. Find the union of two arrays\n";
    echo "4. Find set difference of two arrays\n";
    echo "5.Exit\n";
    echo "Enter your Choice";
    $choice=intval(trim(fgets(STDIN)));
    
    switch($choice)
    {
        case 1:
            echo "Merging Arrays:\n";
            print_r(mergeArrays($array1,$array2));
            break;
        case 2:
            echo "Intersection of arrays:\n";
            print_r(intersection($array1,$array2));
            break;
        case 3:
            echo "Union of arrays:\n";
            print_r(union($array1,$array2));
            break;
        case 4:
            echo "Set Difference (Array1- Array2):\n";
            print_r(setDifference($array1,$array2));
            break;
        case 5:
            echo "Exiting...\n";
            break;
            default:
            echo "Invlid Choice. Please try again.\n";
    }
}while ($choice !=5);
?>

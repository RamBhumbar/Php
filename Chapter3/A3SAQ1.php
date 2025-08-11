<?php
$assoc_array=array(
    "apple"=>10,
    "banana"=>20,
    "cherry"=>30,
    "date"=>40,
                );
    function display_elements($array){
    
        echo"\nElements of the associative array along with the keys:\n";
        foreach($array as $key=>$value)
        {
        echo"$key:$value\n";
        }
    }
    function display_size($array)
    {
        $size=count($array);
        echo"\nsize of the associative array:$size\n";
    }
    function menu()
    {
        global $assoc_array;
        while(true){
            echo"\nMenu:\n";
            echo"1.Display elements of the array along with the keys\n";
            echo"2.Display the size of the array\n";
            echo"3.Exit\n";
            
            $choice=readline("Enter your choice(1/2/3):");
            switch ($choice){
                case 1:
                    display_elements($assoc_array);
                    break;
                    case2:
                        display_size($assoc_array);
                        break;
                    case 3:
                        echo"Exting the program.\n";
                        exit();
                        default:
                        echo"invalid choice.please try again.\n";
                        break;
                        }
                    
                    }
                }
    menu();
     
    ?>
    
    
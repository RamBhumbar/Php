Write PHP script to demonstrate the concept of introspection for examining object. 


<?php
class SampleClass {
    public $var1 = "Hello";
    private $var2 = "World";
    protected $var3 = "PHP";
    
    public function sampleMethod() {
        return "This is a sample method.";
    }
}

// Create an object of the class
$obj = new SampleClass();

// Using introspection functions
echo "Class Name: " . get_class($obj) . "\n";
echo "Methods: " . implode(", ", get_class_methods($obj)) . "\n";
echo "Properties: " . implode(", ", array_keys(get_object_vars($obj))) . "\n";
echo "Parent Class: " . get_parent_class($obj) . "\n";
?>
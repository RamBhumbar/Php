// Write PHP script to demonstrate the concept of introspection for examining object.
<?php

class SampleClass
{
    public $property1 = 'Value 1';
    protected $property2 = 'Value 2';
    private $property3 = 'Value 3';

    public function method1()
    {
        // Method implementation
    }

    protected function method2()
    {
        // Method implementation
    }

    private function method3()
    {
        // Method implementation
    }
}

// Instantiate the SampleClass
$object = new SampleClass();

// Get the class name of the object
$className = get_class($object);
echo "Class Name: $className\n";

// Get the methods of the class
$methods = get_class_methods($className);
echo "Methods:\n";
foreach ($methods as $method) {
    echo " - $method\n";
}

// Get the properties of the class
$properties = get_class_vars($className);
echo "Properties:\n";
foreach ($properties as $property => $value) {
    echo " - $property: $value\n";
}

// Check if the object is an instance of a specific class
$isInstance = $object instanceof SampleClass ? 'Yes' : 'No';
echo "Is instance of SampleClass? $isInstance\n";

// Check if the class exists
$classExists = class_exists('SampleClass') ? 'Yes' : 'No';
echo "Does SampleClass exist? $classExists\n";

// Check if a method exists in the class
$methodExists = method_exists($object, 'method1') ? 'Yes' : 'No';
echo "Does method1 exist? $methodExists\n";

// Check if a property exists in the class
$propertyExists = property_exists($object, 'property1') ? 'Yes' : 'No';
echo "Does property1 exist? $propertyExists\n";

?>

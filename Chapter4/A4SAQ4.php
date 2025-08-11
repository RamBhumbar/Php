<?php


class Car {
    public $make;
    public $model;
    private $engineType;
    protected $color;

 
    public function __construct($make, $model, $engineType, $color) {
        $this->make = $make;
        $this->model = $model;
        $this->engineType = $engineType;
        $this->color = $color;
    }

    
    public function startEngine() {
        echo "Engine started!";
    }


    private function stopEngine() {
        echo "Engine stopped!";
    }

    
    protected function changeColor($newColor) {
        $this->color = $newColor;
    }

  
    public static function getCarInfo() {
        echo "This is a car!";
    }
}


$myCar = new Car("Toyota", "Corolla", "Petrol", "Red");


echo "Class name: " . get_class($myCar) . "<br>";


echo "Object properties: <br>";
print_r(get_object_vars($myCar)); 
echo "<br>";

echo "Methods of the class: <br>";
print_r(get_class_methods($myCar)); 
echo "<br>";


$methodName = "startEngine";
if (method_exists($myCar, $methodName)) {
    echo "The method '$methodName' exists in the class.<br>";
} else {
    echo "The method '$methodName' does not exist in the class.<br>";
}


$propertyName = "model";
if (property_exists($myCar, $propertyName)) {
    echo "The property '$propertyName' exists in the class.<br>";
} else {
    echo "The property '$propertyName' does not exist in the class.<br>";
}


echo "Class of the object: " . get_class($myCar) . "<br>";


$reflectionClass = new ReflectionClass($myCar);
echo "Class Reflection Info: <br>";
echo "Class Name: " . $reflectionClass->getName() . "<br>";
echo "Methods: <br>";
foreach ($reflectionClass->getMethods() as $method) {
    echo $method->getName() . "<br>";
}

echo "Properties: <br>";
foreach ($reflectionClass->getProperties() as $property) {
    echo $property->getName() . "<br>";
}


$reflectionMethod = $reflectionClass->getMethod('startEngine');
$reflectionMethod->setAccessible(true);  
$reflectionMethod->invoke($myCar);  

?>

Write a PHP program to define Interface shape which has two method as area() and 
volume(). Define a constant PI. Create a class Cylinder implement this interface and 
calculate area and Volume. 

<?php
// Define Interface Shape
interface Shape {
    const PI = 3.14159265359;
    public function area();
    public function volume();
}

// Implement the interface in Cylinder class
class Cylinder implements Shape {
    private $radius;
    private $height;

    public function __construct($radius, $height) {
        $this->radius = $radius;
        $this->height = $height;
    }

    // Calculate surface area of the cylinder
    public function area() {
        return 2 * self::PI * $this->radius * ($this->radius + $this->height);
    }

    // Calculate volume of the cylinder
    public function volume() {
        return self::PI * pow($this->radius, 2) * $this->height;
    }
}

// Create an instance of Cylinder
$cylinder = new Cylinder(5, 10);

echo "Surface Area of Cylinder: " . $cylinder->area() . "<br>";
echo "Volume of Cylinder: " . $cylinder->volume() . "<br>";
?>
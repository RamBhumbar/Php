//Write a PHP script to create a Class shape and its subclass triangle, square and display 
area of the selected shape.( use the concept of Inheritance) . Display menu (use radio button) 
Triangle 
Square 
Rectangle
Circle


<?php
interface Shape {
    const PI = 3.14159;
    public function area();
    public function volume();
}

class Triangle implements Shape {
    private $base, $height;
    
    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }
    
    public function area() {
        return 0.5 * $this->base * $this->height;
    }
    
    public function volume() {
        return 0; // Triangle has no volume
    }
}

class Square implements Shape {
    private $side;
    
    public function __construct($side) {
        $this->side = $side;
    }
    
    public function area() {
        return $this->side * $this->side;
    }
    
    public function volume() {
        return 0; // Square has no volume
    }
}

class Rectangle implements Shape {
    private $length, $width;
    
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }
    
    public function area() {
        return $this->length * $this->width;
    }
    
    public function volume() {
        return 0; // Rectangle has no volume
    }
}

class Circle implements Shape {
    private $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }
    
    public function area() {
        return self::PI * pow($this->radius, 2);
    }
    
    public function volume() {
        return 0; // Circle has no volume
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $shape = $_POST['shape'];
    
    switch ($shape) {
        case 'Triangle':
            $base = $_POST['base'];
            $height = $_POST['height'];
            $obj = new Triangle($base, $height);
            break;
        case 'Square':
            $side = $_POST['side'];
            $obj = new Square($side);
            break;
        case 'Rectangle':
            $length = $_POST['length'];
            $width = $_POST['width'];
            $obj = new Rectangle($length, $width);
            break;
        case 'Circle':
            $radius = $_POST['radius'];
            $obj = new Circle($radius);
            break;
    }
    echo "<h2>Selected Shape: $shape</h2>";
    echo "<p>Area: " . $obj->area() . "</p>";
}
?>

<form method="post">
    <label>Select Shape:</label><br>
    <input type="radio" name="shape" value="Triangle" required> Triangle<br>
    <input type="radio" name="shape" value="Square"> Square<br>
    <input type="radio" name="shape" value="Rectangle"> Rectangle<br>
    <input type="radio" name="shape" value="Circle"> Circle<br>
    <br>
    <label>Enter Base (for Triangle):</label> <input type="number" name="base"><br>
    <label>Enter Height (for Triangle):</label> <input type="number" name="height"><br>
    <label>Enter Side (for Square):</label> <input type="number" name="side"><br>
    <label>Enter Length (for Rectangle):</label> <input type="number" name="length"><br>
    <label>Enter Width (for Rectangle):</label> <input type="number" name="width"><br>
    <label>Enter Radius (for Circle):</label> <input type="number" name="radius"><br>
    <br>
    <input type="submit" value="Calculate Area">
</form>

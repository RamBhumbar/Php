// Write a PHP program to define Interface shape which has two method as area() and 
volume(). Define a constant PI. Create a class Cylinder implement this interface and 
calculate area and Volume. 

<?php
interface Shape {
    const PI = 3.14159;
    public function area();
    public function volume();
}

class Cylinder implements Shape {
    private $radius;
    private $height;
    
    public function __construct($radius, $height) {
        $this->radius = $radius;
        $this->height = $height;
    }
    
    public function area() {
        return 2 * self::PI * $this->radius * ($this->radius + $this->height);
    }
    
    public function volume() {
        return self::PI * pow($this->radius, 2) * $this->height;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radius = $_POST['radius'];
    $height = $_POST['height'];
    
    $cylinder = new Cylinder($radius, $height);
    $area = $cylinder->area();
    $volume = $cylinder->volume();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculate Cylinder Area and Volume</title>
</head>
<body>
    <h2>Enter Cylinder Dimensions</h2>
    <form method="post" action="">
        Radius: <input type="number" name="radius" step="0.01" required><br>
        Height: <input type="number" name="height" step="0.01" required><br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($area) && isset($volume)) {
        echo "<h3>Surface Area: $area</h3>";
        echo "<h3>Volume: $volume</h3>";
    }
    ?>
</body>
</html>

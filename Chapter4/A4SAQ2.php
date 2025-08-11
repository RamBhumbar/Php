<?php
class Shape {
    
    public function getArea() {
        return 0;
    }
}


class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function getArea() {
        return 0.5 * $this->base * $this->height;
    }
}


class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function getArea() {
        return $this->side * $this->side;
    }
}


class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }
}


class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }
}


$base = $height = $side = $length = $width = $radius = 0;
$area = 0;
$shape = null;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $shapeType = $_POST['shape'] ?? '';
    
    switch ($shapeType) {
        case 'triangle':
            $base = $_POST['base'];
            $height = $_POST['height'];
            $shape = new Triangle($base, $height);
            break;
        
        case 'square':
            $side = $_POST['side'];
            $shape = new Square($side);
            break;
        
        case 'rectangle':
            $length = $_POST['length'];
            $width = $_POST['width'];
            $shape = new Rectangle($length, $width);
            break;
        
        case 'circle':
            $radius = $_POST['radius'];
            $shape = new Circle($radius);
            break;
        
        default:
            
            echo "Please select a valid shape.";
            break;
    }

    
    if ($shape !== null) {
        $area = $shape->getArea();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Shape Area Calculator</title>
</head>
<body>
    <h1>Calculate Area of Shapes</h1>

    <form method="POST">
        
        <label>
            <input type="radio" name="shape" value="triangle" <?php if ($_POST['shape'] == 'triangle') echo 'checked'; ?> required> Triangle
        </label><br>
        <label>
            <input type="radio" name="shape" value="square" <?php if ($_POST['shape'] == 'square') echo 'checked'; ?>> Square
        </label><br>
        <label>
            <input type="radio" name="shape" value="rectangle" <?php if ($_POST['shape'] == 'rectangle') echo 'checked'; ?>> Rectangle
        </label><br>
        <label>
            <input type="radio" name="shape" value="circle" <?php if ($_POST['shape'] == 'circle') echo 'checked'; ?>> Circle
        </label><br><br>

        
        <?php if ($_POST['shape'] == 'triangle' || isset($shape) && $shape instanceof Triangle): ?>
            <label>Base: <input type="number" name="base" value="<?php echo $base; ?>" required></label><br>
            <label>Height: <input type="number" name="height" value="<?php echo $height; ?>" required></label><br>
        <?php endif; ?>

        <?php if ($_POST['shape'] == 'square' || isset($shape) && $shape instanceof Square): ?>
            <label>Side: <input type="number" name="side" value="<?php echo $side; ?>" required></label><br>
        <?php endif; ?>

        <?php if ($_POST['shape'] == 'rectangle' || isset($shape) && $shape instanceof Rectangle): ?>
            <label>Length: <input type="number" name="length" value="<?php echo $length; ?>" required></label><br>
            <label>Width: <input type="number" name="width" value="<?php echo $width; ?>" required></label><br>
        <?php endif; ?>

        <?php if ($_POST['shape'] == 'circle' || isset($shape) && $shape instanceof Circle): ?>
            <label>Radius: <input type="number" name="radius" value="<?php echo $radius; ?>" required></label><br>
        <?php endif; ?>

        <button type="submit">Calculate Area</button>
    </form>

    
    <?php
    if ($area > 0) {
        echo "<h2>Area: " . $area . "</h2>";
    }
    ?>
</body>
</html>





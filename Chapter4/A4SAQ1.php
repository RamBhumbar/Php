<?php
define('PI','3.14');
interface shape {
    public function area();
    public function volume();

}
class cylinder implements shape {
    private $radius;
    private $height;
    public function __construct($radius, $height)
    {
        $this->radius=$radius;
        $this->height=$height;

    }
    public function area()
    {
        $a = 2*PI *$this->radius *($this->radius + $this->height);
        return $a;
    }
    public function volume()
    {
    $b=PI * $this->radius* $this->radius * $this->height;
    return $b;
}
}

$l=readline("enter radius");
$h=readline("enter height");
$cylinder = new cylinder($l,$h);
echo "area of the cylinder:";
$cylinder->area(). "square units\n";
echo "volume of the cylinder:";
$cylinder->volume()."cubic units\n";

?>
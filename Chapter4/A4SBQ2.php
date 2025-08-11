<?php


class Emp {
    private $id;
    private $name;
    private $dept;
    private $sal;

    
    public function __construct($id, $name, $dept, $sal) {
        $this->id = $id;
        $this->name = $name;
        $this->dept = $dept;
        $this->sal = $sal;
    }

    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDept() {
        return $this->dept;
    }

    public function getSal() {
        return $this->sal;
    }
}


class Manager extends Emp {
    private $bonus;

    
    public function __construct($id, $name, $dept, $sal, $bonus) {
        parent::__construct($id, $name, $dept, $sal); 
        $this->bonus = $bonus;
    }

    
    public function getBonus() {
        return $this->bonus;
    }

    
    public function getTotalSalary() {
        return $this->getSal() + $this->bonus;
    }

   
    public function displayDetails() {
        echo "ID: " . $this->getId() . "<br>";
        echo "Name: " . $this->getName() . "<br>";
        echo "Department: " . $this->getDept() . "<br>";
        echo "Salary: " . $this->getSal() . "<br>";
        echo "Bonus: " . $this->getBonus() . "<br>";
        echo "Total Salary: " . $this->getTotalSalary() . "<br><br>";
    }
}


$managers = [
    new Manager(1, "John Doe", "HR", 50000, 10000),
    new Manager(2, "Jane Smith", "Finance", 60000, 12000),
    new Manager(3, "Mark Wilson", "IT", 55000, 8000),
    new Manager(4, "Emily Davis", "Marketing", 45000, 9000),
    new Manager(5, "Michael Brown", "Sales", 70000, 15000),
    new Manager(6, "Sarah Johnson", "Operations", 65000, 11000)
];


$maxTotalSalary = 0;
$maxManager = null;

foreach ($managers as $manager) {
    $totalSalary = $manager->getTotalSalary();
    if ($totalSalary > $maxTotalSalary) {
        $maxTotalSalary = $totalSalary;
        $maxManager = $manager;
    }
}


echo "<h3>Manager with Maximum Total Salary:</h3>";
$maxManager->displayDetails();

?>

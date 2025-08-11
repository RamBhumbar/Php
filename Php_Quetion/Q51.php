Define a class Employee having private members – id, name, department, salary. Define 
parameterized constructors. Create a subclass called “Manager” with private member bonus. 
Create 3 objects of the Manager class and display the details of the manager having the 
maximum total salary (salary + bonus).

<?php
class Employee {
    private $id;
    private $name;
    private $department;
    private $salary;

    public function __construct($id, $name, $department, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getDetails() {
        return "ID: $this->id, Name: $this->name, Department: $this->department, Salary: $this->salary";
    }
}

class Manager extends Employee {
    private $bonus;

    public function __construct($id, $name, $department, $salary, $bonus) {
        parent::__construct($id, $name, $department, $salary);
        $this->bonus = $bonus;
    }

    public function getTotalSalary() {
        return $this->getSalary() + $this->bonus;
    }

    public function getDetails() {
        return parent::getDetails() . ", Bonus: $this->bonus, Total Salary: " . $this->getTotalSalary();
    }
}

// Creating Manager objects
$managers = [
    new Manager(1, "Alice", "HR", 50000, 10000),
    new Manager(2, "Bob", "IT", 60000, 15000),
    new Manager(3, "Charlie", "Finance", 55000, 12000)
];

// Finding the manager with the maximum total salary
$maxManager = $managers[0];
foreach ($managers as $manager) {
    if ($manager->getTotalSalary() > $maxManager->getTotalSalary()) {
        $maxManager = $manager;
    }
}

// Displaying the manager with the highest total salary
echo "Manager with the highest total salary:\n";
echo $maxManager->getDetails();
?>
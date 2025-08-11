<?php
// PHP script to display student information on a web page
class Student {
    public $rollNo;
    public $name;
    public $percentage;

    public function __construct($rollNo, $name, $percentage) {
        $this->rollNo = $rollNo;
        $this->name = $name;
        $this->percentage = $percentage;
    }

    public function displayStudent() {
        echo "<h3>Student Information</h3>";
        echo "<p>Roll No: $this->rollNo</p>";
        echo "<p>Name: $this->name</p>";
        echo "<p>Percentage: $this->percentage%</p>";
    }
}

// Creating a student object
$student1 = new Student(101, "John Doe", 89.5);
$student1->displayStudent();
?>
<?php


class Teacher {
    protected $code;
    protected $name;
    protected $class;
    protected $qualification;

    
    public function __construct($code, $name, $class, $qualification) {
        $this->code = $code;
        $this->name = $name;
        $this->class = $class;
        $this->qualification = $qualification;
    }

   
    public function displayTeacher() {
        return "Code: $this->code, Name: $this->name, Class: $this->class, Qualification: $this->qualification";
    }
}


class Teach_Account extends Teacher {
    protected $accountNo;
    protected $joiningDate;

    public function __construct($code, $name, $class, $qualification, $accountNo, $joiningDate) {
        parent::__construct($code, $name, $class, $qualification);  
        $this->accountNo = $accountNo;
        $this->joiningDate = $joiningDate;
    }

   
    public function displayAccount() {
        return "Account No: $this->accountNo, Joining Date: $this->joiningDate";
    }
}


class Teach_Sal extends Teach_Account {
    private $basicPay;
    private $earnings;
    private $deductions;

    
    public function __construct($code, $name, $class, $qualification, $accountNo, $joiningDate, $basicPay, $earnings, $deductions) {
        parent::__construct($code, $name, $class, $qualification, $accountNo, $joiningDate); 
        $this->basicPay = $basicPay;
        $this->earnings = $earnings;
        $this->deductions = $deductions;
    }

    
    public function calculateSalary() {
        return $this->basicPay + $this->earnings - $this->deductions;
    }

    
    public function displaySalary() {
        return "Basic Pay: $this->basicPay, Earnings: $this->earnings, Deductions: $this->deductions, Total Salary: " . $this->calculateSalary();
    }
}


class TeacherManagementSystem {
    private $teachers = [];

    
    public function addTeacher($teacher) {
        $this->teachers[] = $teacher;
    }

    
    public function sortTeachers() {
        usort($this->teachers, function ($a, $b) {
            return strcmp($a->name, $b->name);
        });
    }

    
    public function searchTeacher($code) {
        foreach ($this->teachers as $teacher) {
            if ($teacher->code == $code) {
                return $teacher;
            }
        }
        return null; 
    }

   
    public function displaySalaries() {
        foreach ($this->teachers as $teacher) {
            echo $teacher->displayTeacher() . "<br>";
            echo $teacher->displayAccount() . "<br>";
            echo $teacher->displaySalary() . "<br><br>";
        }
    }
}


function showMenu() {
    echo "<h2>Teacher Management System</h2>";
    echo "1. Build a Master Table of Teachers<br>";
    echo "2. Sort All Entries<br>";
    echo "3. Search an Entry<br>";
    echo "4. Display Salary of All Teachers<br>";
    echo "5. Exit<br><br>";
    echo "Enter your choice: ";
}


$teacherSystem = new TeacherManagementSystem();

while (true) {
    showMenu();
    $choice = readline();

    switch ($choice) {
        case 1:
            
            echo "Enter teacher code: ";
            $code = readline();
            echo "Enter teacher name: ";
            $name = readline();
            echo "Enter teacher class: ";
            $class = readline();
            echo "Enter teacher qualification: ";
            $qualification = readline();
            echo "Enter account number: ";
            $accountNo = readline();
            echo "Enter joining date (yyyy-mm-dd): ";
            $joiningDate = readline();
            echo "Enter basic pay: ";
            $basicPay = readline();
            echo "Enter earnings: ";
            $earnings = readline();
            echo "Enter deductions: ";
            $deductions = readline();

           
            $teacher = new Teach_Sal($code, $name, $class, $qualification, $accountNo, $joiningDate, $basicPay, $earnings, $deductions);
            $teacherSystem->addTeacher($teacher);
            echo "Teacher added successfully.<br><br>";
            break;

        case 2:
           
            $teacherSystem->sortTeachers();
            echo "Teachers sorted by name.<br><br>";
            break;

        case 3:
            
            echo "Enter teacher code to search: ";
            $searchCode = readline();
            $teacher = $teacherSystem->searchTeacher($searchCode);

            if ($teacher !== null) {
                echo $teacher->displayTeacher() . "<br>";
                echo $teacher->displayAccount() . "<br>";
                echo $teacher->displaySalary() . "<br><br>";
            } else {
                echo "Teacher not found.<br><br>";
            }
            break;

        case 4:
           
            $teacherSystem->displaySalaries();
            break;

        case 5:
            
            echo "Exiting the program.<br>";
            exit;

        default:
            echo "Invalid choice. Please try again.<br><br>";
            break;
    }
}
?>

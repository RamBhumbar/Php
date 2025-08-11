Write class declarations and member function definitions for Teacher (code, name, 
qualification). Derive teach_account(account_no,joining_date) from Teacher and 
teach_sal(basic_pay, earnings, deduction) fromteach_account. Write a menu driven program 
a) 
b) 
c) 
d) 
To build a master table 
To sort all entries 
To search an entry 
Display salary of all teachers.

<?php
class Teacher {
    protected $code;
    protected $name;
    protected $qualification;

    public function __construct($code, $name, $qualification) {
        $this->code = $code;
        $this->name = $name;
        $this->qualification = $qualification;
    }

    public function display() {
        echo "Code: $this->code, Name: $this->name, Qualification: $this->qualification\n";
    }
}

class TeachAccount extends Teacher {
    protected $account_no;
    protected $joining_date;

    public function __construct($code, $name, $qualification, $account_no, $joining_date) {
        parent::__construct($code, $name, $qualification);
        $this->account_no = $account_no;
        $this->joining_date = $joining_date;
    }
}

class TeachSal extends TeachAccount {
    private $basic_pay;
    private $earnings;
    private $deduction;

    public function __construct($code, $name, $qualification, $account_no, $joining_date, $basic_pay, $earnings, $deduction) {
        parent::__construct($code, $name, $qualification, $account_no, $joining_date);
        $this->basic_pay = $basic_pay;
        $this->earnings = $earnings;
        $this->deduction = $deduction;
    }

    public function getTotalSalary() {
        return $this->basic_pay + $this->earnings - $this->deduction;
    }

    public function displaySalary() {
        echo "Total Salary of $this->name: " . $this->getTotalSalary() . "\n";
    }
}

// Menu-driven program
$teachers = [];
while (true) {
    echo "\nMenu:\n1. Build Master Table\n2. Sort Entries\n3. Search Entry\n4. Display Salaries\n5. Exit\nEnter choice: ";
    $choice = trim(fgets(STDIN));

    switch ($choice) {
        case 1:
            echo "Enter number of teachers: ";
            $n = trim(fgets(STDIN));
            for ($i = 0; $i < $n; $i++) {
                echo "Enter code, name, qualification, account no, joining date, basic pay, earnings, deduction (comma-separated): ";
                list($code, $name, $qualification, $account_no, $joining_date, $basic_pay, $earnings, $deduction) = explode(",", trim(fgets(STDIN)));
                $teachers[] = new TeachSal($code, $name, $qualification, $account_no, $joining_date, $basic_pay, $earnings, $deduction);
            }
            break;
        case 2:
            usort($teachers, function ($a, $b) { return strcmp($a->name, $b->name); });
            echo "Entries sorted successfully.\n";
            break;
        case 3:
            echo "Enter teacher code to search: ";
            $searchCode = trim(fgets(STDIN));
            foreach ($teachers as $teacher) {
                if ($teacher->code == $searchCode) {
                    $teacher->display();
                    break;
                }
            }
            break;
        case 4:
            foreach ($teachers as $teacher) {
                $teacher->displaySalary();
            }
            break;
        case 5:
            exit("Exiting program.\n");
        default:
            echo "Invalid choice. Try again.\n";
    }
}
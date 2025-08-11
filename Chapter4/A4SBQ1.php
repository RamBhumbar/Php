<?php


class Account {
    protected $a_no;
    protected $cust_name;

    
    public function __construct($a_no, $cust_name) {
        $this->a_no = $a_no;
        $this->cust_name = $cust_name;
    }

  
    public function displayAccount() {
        echo "Account Number: " . $this->a_no . "<br>";
        echo "Customer Name: " . $this->cust_name . "<br>";
    }
}


class Saving_Account extends Account {
    private $balance;
    private $min_amount;

    
    public function __construct($a_no, $cust_name, $balance, $min_amount) {
        parent::__construct($a_no, $cust_name);  
        $this->balance = $balance;
        $this->min_amount = $min_amount;
    }

   
    public function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited: $amount<br>";
        $this->displayBalance();
    }

   
    public function withdraw($amount) {
        if ($this->balance - $amount < $this->min_amount) {
            echo "Cannot withdraw! Minimum balance of $this->min_amount must be maintained.<br>";
        } else {
            $this->balance -= $amount;
            echo "Withdrew: $amount<br>";
            $this->displayBalance();
        }
    }

    
    public function displayBalance() {
        echo "Current Balance: " . $this->balance . "<br>";
    }
}


class Current_Account extends Account {
    private $balance;
    private $min_amount;

    
    public function __construct($a_no, $cust_name, $balance, $min_amount) {
        parent::__construct($a_no, $cust_name);  
        $this->balance = $balance;
        $this->min_amount = $min_amount;
    }

   
    public function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited: $amount<br>";
        $this->displayBalance();
    }

  
    public function withdraw($amount) {
        if ($this->balance - $amount < $this->min_amount) {
            echo "Cannot withdraw! Minimum balance of $this->min_amount must be maintained.<br>";
        } else {
            $this->balance -= $amount;
            echo "Withdrew: $amount<br>";
            $this->displayBalance();
        }
    }

    
    public function displayBalance() {
        echo "Current Balance: " . $this->balance . "<br>";
    }
}


function showMenu() {
    echo "<h2>Welcome to the Banking System</h2>";
    echo "1. Saving Account<br>";
    echo "2. Current Account<br>";
    echo "3. Exit<br><br>";
    echo "Enter your choice: ";
}


function savingAccountMenu($account) {
    echo "<h3>Saving Account Menu</h3>";
    echo "1. Create Account<br>";
    echo "2. Deposit<br>";
    echo "3. Withdraw<br>";
    echo "4. Back to Main Menu<br><br>";
    echo "Enter your choice: ";
    
    $choice = readline();
    
    switch ($choice) {
        case 1:
            echo "Account already created.<br>";
            break;
        case 2:
            echo "Enter deposit amount: ";
            $amount = readline();
            $account->deposit($amount);
            break;
        case 3:
            echo "Enter withdrawal amount: ";
            $amount = readline();
            $account->withdraw($amount);
            break;
        case 4:
            return;  
        default:
            echo "Invalid option.<br>";
            break;
    }
}


function currentAccountMenu($account) {
    echo "<h3>Current Account Menu</h3>";
    echo "1. Create Account<br>";
    echo "2. Deposit<br>";
    echo "3. Withdraw<br>";
    echo "4. Back to Main Menu<br><br>";
    echo "Enter your choice: ";
    
    $choice = readline();
    
    switch ($choice) {
        case 1:
            echo "Account already created.<br>";
            break;
        case 2:
            echo "Enter deposit amount: ";
            $amount = readline();
            $account->deposit($amount);
            break;
        case 3:
            echo "Enter withdrawal amount: ";
            $amount = readline();
            $account->withdraw($amount);
            break;
        case 4:
            return;  
        default:
            echo "Invalid option.<br>";
            break;
    }
}


while (true) {
    showMenu();
    $mainChoice = readline();
    
    switch ($mainChoice) {
        case 1:
            
            echo "Enter saving account number: ";
            $a_no = readline();
            echo "Enter customer name: ";
            $cust_name = readline();
            echo "Enter initial balance: ";
            $balance = readline();
            echo "Enter minimum balance: ";
            $min_amount = readline();
            $savingAccount = new Saving_Account($a_no, $cust_name, $balance, $min_amount);
            savingAccountMenu($savingAccount);
            break;

        case 2:
           
            echo "Enter current account number: ";
            $a_no = readline();
            echo "Enter customer name: ";
            $cust_name = readline();
            echo "Enter initial balance: ";
            $balance = readline();
            echo "Enter minimum balance: ";
            $min_amount = readline();
            $currentAccount = new Current_Account($a_no, $cust_name, $balance, $min_amount);
            currentAccountMenu($currentAccount);
            break;

        case 3:
            echo "Exiting the banking system. Goodbye!<br>";
            exit;

        default:
            echo "Invalid choice. Please try again.<br>";
            break;
    }
}
?>

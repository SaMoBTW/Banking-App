<?php
$user = "";
$data = 
[
    'check1'=> 
    [
        'number'=> '1234 5678 9101',
        'amount'=> 2000,
        'name' => 'Checking 1'
    ],
    'check2' =>
    [
        'number'=> '9876 5432 1032',
        'amount'=> 0,
        'name'=> 'Checking 2'
    ],
    'check3'=> 
    [
        'number'=> '4675 4582 2158',
        'amount'=> 1000000,
        'name'=> 'Checking 3'
    ]
];
    function checkBalance($accountBalance1, $accountBalance2) {
        if ($accountBalance1 > $accountBalance2) {
            return "Insufficient funds in account!";
        } else {
            return "Transaction happened.";
        }
    }
    function displayAccounts($data){
        $total = 0;
        foreach ($data as $check) {
            echo "
            <div class = 'acc-wrapper'>
                <h3 class = 'checking-heading'>{$check['name']}</h3>
                <p class = 'checking-acc-num'>{$check['number']}</p>
      
                <h2 class = 'checking-balance'>Available balance: $ {$check['amount']}</h2>
            </div>
            ";
            $total += $check['amount'];
        }
        echo "<h2 class = 'total'> Total: $ {$total} </h2>";
    }

    function setUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION['$user'] = $_POST['username'];
            header("Location: src/Account.php");
            exit();
        }
    };
    function getUser(){
        echo $_SESSION['$user'];
    }
    
    function updateCheckingDetails($data) {
        // Ensure session is started
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    
        foreach ($data as $key => $check) {
            $sessionKey = $check['name'] . 'amount';
    
            if (isset($_SESSION[$sessionKey])) {
                // Update array with session data
                $data[$key]['amount'] = $_SESSION[$sessionKey];
            } else {
                // Initialize session data with array value
                $_SESSION[$sessionKey] = $check['amount'];
            }
        }
    
        return $data; // Return the updated array
    }
    
    function goToAccount()
    {
        header("Location: src/Account.php");
        exit();
    }
    function goToTransfer(){
        header("Location: src/Transfers.php");
        exit();
    }

    

?>

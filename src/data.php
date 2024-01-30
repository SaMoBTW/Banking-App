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
            <div>
                <p class = 'checkingDiv'>{$check['name']}</p>
                <p class = 'checkingDiv'>{$check['number']}</p>
                <p class = 'checkingDiv'>{$check['amount']}</p>
            </div>
            ";
            $total += $check['amount'];
        }
        echo "<h3 class = 'total'> Total  = {$total} </h3>";
    }

    function setUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION['$user'] = $_POST['username'];
            header("Location: elias.php");
            exit();
        }
    };
    function getUser(){
        echo $_SESSION['$user'];
    }
?>

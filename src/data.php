<?php
$name = "";
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
        foreach ($data as $check) {
            echo "
            <div>
                <h3>{$check['name']}</h3>
                <p>{$check['number']}</p>
                <p>{$check['amount']}</p>
            </div>
            ";
        }
    }

    function getUser()
    {
        return $_POST['name'];
    };
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balance Check Form</title>
</head>
<body>

    <?php
    getUser();
    echo $name;
    ?>

</body>
</html>


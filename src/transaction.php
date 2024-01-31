<?php 

// Path Configuring   //////////////////////////////////////
$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];
define('APP_ROOT', dirname(__FILE__));
define('URL_BASE', $config[$environment]["URL_BASE"]);
////////////////////////////////////////////////////////////
include_once(APP_ROOT. "/data.php");
include_once(APP_ROOT . "/BoilerPlate/head.view.php");
include_once(APP_ROOT . "/BoilerPlate/header.view.php");
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
foreach ($data as $check) {
    if (isset($_POST[$check['name']]))
    {
        continue;
    }
    else 
    {
        $_POST[$check['name']] = $check['amount'];
    }
    print_r($_POST);
}

?>
<form method="post">
From: 
  <select name="from" id="from">
    <option value="Checking 1" name = "Checking 1">Checking1</option>
    <option value="Checking 2" name = "Checking 2">Checking2</option>
    <option value="Checking 3" name = "Checking 3">Checking3</option>
  </select><br>
To: 
  <select name="To" id="from">
    <option value="Checking 1" name = "Checking 1">Checking1</option>
    <option value="Checking 2" name = "Checking 2">Checking2</option>
    <option value="Checking 3" name = "Checking 3">Checking3</option>

  </select><br>
Amount: 
  <input type="text" name="amount" >
  <br><br>
  <input type="submit">

</form>
<?php
//task added. Check if $_POST['amount'] is less than $_POST[$_POST['form']] throw in the code down there then do an else
// echo "INSUFFICIENT FUNDS" do not use chat gpt it will mess with the entire page. 
//remember these are basically just numbers $_POST[$_POST['from']] , $_POST['amount'].
// have the suffienct funds and insufficient funds be in paragraph tags that have a class of sufffunds, and insufffunds.

$_POST[$_POST['from']] -= $_POST['amount'];
$_POST[$_POST['To']] += $_POST['amount'];

?>
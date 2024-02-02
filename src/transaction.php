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
<form class="transaction-form" method="post">

  <h2>
    From:
  </h2> 
  <select name="from" id="from">
    <option value="checking1" name = "Checking 1">Checking1</option>
    <option value="checking2" name = "Checking 2">Checking2</option>
    <option value="checking3" name = "Checking 3">Checking3</option>
  </select>
  <input type="text" type='textbox' class="trans-acc-balance">
  <br>

  <h2>
    To: 
  </h2>
  <select name="from" id="from">
    <option value="checking1" name = "Checking 1">Checking1</option>
    <option value="checking2" name = "Checking 2">Checking2</option>
    <option value="checking3" name = "Checking 3">Checking3</option>
  </select>
  <input type="text" type='textbox' class="trans-acc-balance">
  <br>

  <h2>
    Amount:
  </h2> 

  <input type="text" name="amount" >
  <br><br>
  <input type="submit" class="transaction-form-button">
  
</form>

<?php

if ($_POST['amount'] <= $_POST[$_POST['from']]){
    $_POST[$_POST['from']] -= $_POST['amount'];
    $_POST[$_POST['To']] += $_POST['amount'];
    echo "<p class = \"sufffunds\">Sufficient funds!</p>";
} else {
    echo "<p class = \"insufffunds\">Insufficient funds!</p>";
}

//task added. Check if $_POST['amount'] is less than $_POST[$_POST['from']] throw in the code down there then do an else
// echo "INSUFFICIENT FUNDS" do not use chat gpt it will mess with the entire page. 
//remember these are basically just numbers $_POST[$_POST['from']] , $_POST['amount'].
// have the suffienct funds and insufficient funds be in paragraph tags that have a class of sufffunds, and insufffunds.


?>
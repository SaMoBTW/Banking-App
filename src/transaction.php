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

?>
<form class="transaction-form" method="post">

  <h2>
    From:
  </h2> 
  <select name="from" id="from">
    <option value="checking1" name = "Checking 1">Checking1</option>
    <option value="checking2" name = "Checking 2">Checking2</option>
    <option value="checking3" name = "Checking 3">Checking3</option>
  </select><br>

  <h2>
    To: 
  </h2>
  <select name="from" id="from">
    <option value="checking1" name = "Checking 1">Checking1</option>
    <option value="checking2" name = "Checking 2">Checking2</option>
    <option value="checking3" name = "Checking 3">Checking3</option>

  </select><br>

  <h2>
    Amount:
  </h2> 

  <input type="text" name="amount" >
  <br><br>
  <input type="submit" class="transaction-form-button">
  
</form>

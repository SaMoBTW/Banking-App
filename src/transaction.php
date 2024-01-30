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
<form method="post">
From: 
  <select name="from" id="from">
    <option value="checking1">checking1</option>
    <option value="checking2">checking2</option>
    <option value="checking3">checking3</option>
  </select><br>
To: 
  <select name="from" id="from">
    <option value="checking1">checking1</option>
    <option value="checking2">checking2</option>
    <option value="checking3">checking3</option>
  </select><br>
Amount: 
  <input type="text" name="amount" readonly>
  <br><br>
  <input type="submit">
</form>

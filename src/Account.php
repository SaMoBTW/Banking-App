<?php 

// Path Configuring   //////////////////////////////////////
$config = parse_ini_file('../config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_ROOT'];
$APP_ROOT = $config[$environment]['APP_ROOT'];
define('APP_ROOT', dirname(__FILE__));
define('URL_BASE', $config[$environment]["URL_ROOT"]);
////////////////////////////////////////////////////////////
include_once(APP_ROOT. "/data.php");
include_once(APP_ROOT . "/BoilerPlate/head.view.php");
include_once(APP_ROOT . "/BoilerPlate/header.view.php");

?>

<div class="accounts-wrapper">

<?php displayAccounts($data); ?>

</div>

<?php include_once($APP_ROOT . '/Banking-App/src/BoilerPlate/footer.view.php') ?>



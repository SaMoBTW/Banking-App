<?php 
// Path Configuring   //////////////////////////////////////
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_BASE'];
$APP_ROOT = $config[$environment]['APP_ROOT'];
define("APP_ROOT", dirname(__FILE__));
define("URL_BASE", $config[$environment]["URL_BASE"]);
////////////////////////////////////////////////////////////

include_once(APP_ROOT . "/src/BoilerPlate/head.view.php");
include_once(APP_ROOT . "/src/BoilerPlate/header.view.php");

?>


<br><br><br><br><br><br><br><br>
    <footer>
        <center>
            <h6><a href="https://google.com"><i> GitHub Repository Code <i></a> <h6>
        </center>
    </footer>
</div>
</body>
</html>

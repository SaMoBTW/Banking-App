<?php 
session_start();
// Path Configuring   //////////////////////////////////////
$config = parse_ini_file('config.ini', true);
$environment = $config['ENVIRONMENT'];
$URL_BASE = $config[$environment]['URL_ROOT'];
$APP_ROOT = $config[$environment]['APP_ROOT'];
define('APP_ROOT', dirname(__FILE__));
define('URL_BASE', $config[$environment]["URL_ROOT"]);
////////////////////////////////////////////////////////////
include_once(APP_ROOT. "/src/data.php");
include_once(APP_ROOT . "/src/BoilerPlate/head.view.php");

?>

<!-- Login form  -->
<div class="form">
    <div class="form-toggle">
        <div class="form-panel one">
            <div class="form-header">
                <h1>Account Login</h1>
            </div>

            <div class="form-content">

                <form method="post">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required="required" />
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required="required" />
                    </div>

                    <div class="form-group">
                        <a href="src/Account.php"><button type="submit">Log In</button></a>
                    </div>
                </form>
                <?php 
                    setUser();
                ?>
            </div>
    </div>
</div>


<!-- Login form  -->
<?php include_once($APP_ROOT . '/Banking-App/src/BoilerPlate/footer.view.php') ?>

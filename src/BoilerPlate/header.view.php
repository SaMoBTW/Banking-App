<?php
session_start();
// Path Configuring   //////////////////////////////////////
$user = $_SESSION['$user'];

?>
<html>
<body>
    <div id="wrapper"> <!-- wrapper dive opens -->
        <header id="banner-container">
            <div id="overlay-div">
                <img id="profileImage" src="./media/bankIcon.jpg">
                <h1 class ="header-heading">&nbsp;&nbsp;&nbsp;&nbsp; <?php echo "Welcome " . $user ?></h1>

                <nav class="nav-bar">
                    <ul>
                        <li class='nav-bar-buttons'><a href=<?php echo URL_BASE . '/Banking-App/src/transaction.php'?>>Transfers</a></li>
                        <li class="nav-bar-buttons"><a href=<?php echo URL_BASE . "/Banking-App/src/Account.php"?>>Accounts</a></li>
                    </ul>
                </nav>
            </div>
        </header>
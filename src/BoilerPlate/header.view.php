<?php
session_start();
// Path Configuring   //////////////////////////////////////
var_dump($_SESSION['$user']);
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
                        <li class='nav-bar-buttons'><a href='/src/transaction.php'>Transfers</a></li>
                        <li class="nav-bar-buttons"><a href="/src/account.php">Accounts</a></li>
                    </ul>
                </nav>
            </div>
        </header>
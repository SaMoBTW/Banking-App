<?php
session_start();
// Path Configuring   //////////////////////////////////////
$user = $_SESSION['$user'];

?>
<body>
    <div id="wrapper">
    <header id="banner-container">
        <div id="overlay-div">
            <img id="profileImage" src="./media/bankIcon.jpg">
            <h1 class ="header-heading">&nbsp;&nbsp;&nbsp;&nbsp; <?php echo "Welcome " . $user ?></h1>

                <nav class="nav-bar">
        <ul>
            <li class='nav-bar-listitems'><a href='/src/transaction.php'>Transfers</a></li>
            <li class="nav-bar-listitems"><a href="/src/account.php">Account</a></li>
        </ul>
    </nav>
        </div>

        <!--<img id="banner" src="src/media/banner.jpg" alt="Banner Image">-->



    </header>



    <br>
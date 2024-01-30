<?php
session_start();
// Path Configuring   //////////////////////////////////////
$user = $_SESSION['$user'];
?>
<body>
    <div id="wrapper">
    <header id="banner-container">
        <div id="overlay-div">
            <img id="profileImage" src="src/media/bankIcon.jpg">
            <h1 class ="header-heading">&nbsp;&nbsp;&nbsp;&nbsp; <?php echo "Welcome " . $user ?></h1>
        </div>

        <!--<img id="banner" src="src/media/banner.jpg" alt="Banner Image">-->

    </header>

    <br>
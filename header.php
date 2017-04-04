<?php session_start();?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./style.css">
	   <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="img/logo.png"/>

    </head>
    <body>
    <div class="logo-nav">
        <img alt="Logo" src="img/logo.png" class="logo">

        <?php if (isset($_SESSION['login'])){ ?>

        <div class="<?php echo $_SESSION["login"] ?>"><?php echo $_SESSION["messge"] ?> <a class="click-me bloc" href="logout.php">Logout</a>
            <?php } ?>

        </div>

    </div>
        <div class="listBox">
            <ul>
                <li class="option">
                    <a href="index.php">Home</a>
                </li>
                <li class="option">
                    <a href="timer.php">Timer</a>
                </li>
                <li class="option">
                    <a href="history.php">History</a>
                </li>
                <li class="option">
                    <a href="login.php">Login</a>
                </li>
            </ul>

        </div>

<?php include('header.php'); ?>

<head>

    <title>Login</title>
</head>


<div class="direc">>Login Page</div>


<div class="contant">
    <div class="boxLogin">

      <?php if (isset($_SESSION["messge"])){?>

        <div class="logoutBox"><p><?php echo $_SESSION["messge"] ?> </p> <a class="click-me bloc" href="logout.php">Logout</a></div>

      <?php }else{ ?>
        <fieldset class="containter-login">
            <legend>Login:</legend>

            <?php

            if (isset($_SESSION['bad'])) {
            ?>

            <div class="<?php echo $_SESSION["bad"] ?>">
                <?php echo $_SESSION["messge"] ?>

            </div>
            <?php } ?>

            <?php
                unset($_SESSION['bad']);
                unset($_SESSION['messge']);

            ?>


            <form action="loging.php" method="post">
                <div>
                    <p><input type="text" name="username"  placeholder="Username" class="input-ch"/> <br /></p>
                    <p><input type="password" name="password" placeholder="Password" class="input-ch"/><br /></p>
                </div>


                <input type="submit" value="Login">
                <a class="click-me" href="register.php">Register</a>
            </form>
        </fieldset>
        <?php }
        $_SESSION = array();?>

    </div>
</div>





<?php
include('footer.php');
?>

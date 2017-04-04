<?php include('header.php'); ?>

<head>
    <title>Register</title>
</head>

<div class="direc">>Login Page</div>

<div class="contant">
    <div class="boxLogin">
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
        <fieldset>
            <legend>Register:</legend>

            <form action="registering.php" method="post" enctype="multipart/form-data">
                <div>
                    <?php if (isset($_SESSION["username"]) || isset($_SESSION["email"])){ ?>
                    <input type="text" name="username" placeholder="Username" class="input" value="<?php echo $_SESSION["username"] ?>"/><br />
                    <input type="text" name="email" placeholder="Email" class="input" value="<?php echo $_SESSION["email"] ?>"/><br />
                    <input type="password" name="password" placeholder="Password" class="input"/><br />
                    <?php } else { ?>
                    <input type="text" name="username" placeholder="Username" class="input"/><br />
                    <input type="text" name="email" placeholder="Email" class="input"/><br />
                    <input type="password" name="password" placeholder="Password" class="input"/><br />
                    <?php } ?>
                </div>


                <input type="submit" value="Register">

            </form>

        </fieldset>
    </div>
</div>

<?php
$_SESSION = array();
include('footer.php');
?>

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
                    <label class="labe" for="user">Username (should be one latter at least) </label>
                    <input type="text" name="username" placeholder="Username" class="input" id="user"/><div id="fillError" class="userError">username should be at least 1 character</div><br />
                    <label class="labe" for="email">Email (this should accpet email format) </label>
                    <input type="email" name="email" placeholder="Email" class="input" id="email"/><div id="fillError" class="emailError">You should follow email format</div><br />
                    <label class="labe" for="password"> Password (length should be more then 6 characters) </label>
                    <input type="password" name="password" placeholder="Password" class="input" id="password"/><div id="fillError" class="passwordError">password should be at least 6 characters</div><br />
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

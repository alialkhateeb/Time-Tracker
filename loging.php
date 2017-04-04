<?php
    session_start();
    require_once 'Dao.php';
    $dao = new Dao();

    $user = htmlentities($_POST["username"]);
    $password = htmlentities($_POST['password']);

    $_SESSION = array();

    if (strlen($user) > 32 || strlen($password) > 32){
        $_SESSION["messge"] = "The length of the username or password is too long";
        $_SESSION["bad"] = "error";
        header("Location:login.php");
        exit();
    }

   elseif ($dao->chechUser($user, $password)){

        $_SESSION["username"] = $user;
        $_SESSION["login"] = "login";
        $_SESSION["messge"] = "Welcome $user";
        //$_SESSION["id"] = $dao->getID($user);

        header("Location:index.php");
        exit;
    }
    else {

        $_SESSION["messge"] = "invalid username or password";
        $_SESSION["bad"] = "error";

        header("Location:login.php");
        exit;
    }


?>

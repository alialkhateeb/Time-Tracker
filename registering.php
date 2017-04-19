<?php

    require_once 'Dao.php';
    $dao = new Dao();
    session_start();

    $username = htmlentities($_POST['username']);
    $pass = htmlentities($_POST['password']);
    $email = htmlentities($_POST['email']);

    $hashPassword = hash("sha256", $pass . "asdfqwerzxcv!@#$1234pojfaldkdfj");



    if (strlen($username) > 32 || strlen($hashPassword) > 66 || strlen($email) > 32){
        $_SESSION["messge"] = "The length of the username or password is too long";
        $_SESSION["bad"] = "error";
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        header("Location:register.php");
        exit();
    }

    elseif(strlen($username) <= 1 || strlen($pass) <= 6){
      $_SESSION["messge"] = "The length of the username or the password is too short";
      $_SESSION["bad"] = "error";
      $_SESSION["username"] = $username;
      $_SESSION["email"] = $email;
      header("Location:register.php");
      exit();
    }

    elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/", $email)){
        $_SESSION["messge"] = "Wrong format for the email";
        $_SESSION["bad"] = "error";
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        header("Location:register.php");
        exit();
    }elseif ($dao->userExist($username)){

        $_SESSION["messge"] = "Username existed, choose another username";
        $_SESSION["bad"] = "error";
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        header("Location:register.php");
        exit();
    }

    $dao->saveUser($username, $hashPassword, $email);

    header("Location:login.php");

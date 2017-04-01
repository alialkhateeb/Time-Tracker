<?php
    session_start();
    require_once 'Dao.php';
    $dao = new Dao();
    
    
    $taskName =  htmlentities($_POST['taskName']);
    
    //this is for x checking and storing
    $xCount = htmlentities($_POST['xCount']);
    if (strlen($xCount) > 0){
        $arrX = str_split($xCount);
        for ($i = 0; $i < sizeof($arrX); $i++){
            
            
        if ($arrX[$i] <> 'x' && $arrX[$i] <> 'X'){
            $_SESSION['message'] = "The format input of (Number of X's) is corrupted";
            $_SESSION["bad"] = "error";
            header("Location:timer.php");
            exit();
            
        }
        }
    }
    

    if (isset($_POST['done'])){
        $done = htmlentities($_POST['done']);
    }else {
        $done = "off";
    }
    
    $comments = htmlentities($_POST['recorder']);
    
    
    $dao->saveTask($_SESSION["username"], $taskName, $xCount, $done, $comments);
    unset($_SESSION["bad"]);
    unset($_SESSION['message']);
    header("Location:history.php");
?>
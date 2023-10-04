<?php
    session_start();
    $_SESSION["wrongPass"]=0;
    if(!isset($_SESSION['cId'])) {
        header('location: login.php');
    }
    else{
        header('location: home.php');
    }
?>
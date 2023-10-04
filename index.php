<?php
    session_start();
    $_SESSION["wrongPass"]=0;
    $_SESSION['cId']=0;
    header('location: home.php');
?>
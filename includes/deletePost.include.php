<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: ../login.php');
    }

    include '../config.php';

    $pId=$_POST['pId'];
    mysqli_query($conn, "DELETE FROM `posts` WHERE `pId`='$pId';");
    header('location: ../home.php');

?>
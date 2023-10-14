<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: ../login.php');
    }

    include '../config.php';

    $cmId=$_POST['cmId'];
    mysqli_query($conn, "DELETE FROM `comment` WHERE `cmId`='$cmId';");
    header('location: ../comment.php');

?>
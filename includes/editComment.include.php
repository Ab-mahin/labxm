<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: ../login.php');
    }

    include '../config.php';

    $com=$_POST['com'];
    $cmId=$_POST['cmId'];

    $res = mysqli_query($conn, "UPDATE `comment` SET `com`='$com' WHERE `cmId`='$cmId';");
    header('location: ../comment.php');

?>
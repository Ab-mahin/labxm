<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: ../login.php');
    }

    include '../config.php';

    $pId=$_POST['pId'];
    $com=$_POST['com'];
    $cId=$_SESSION['cId'];

    mysqli_query($conn, "INSERT INTO `comment` (`cmId`, `pId`, `com`, `cId`) VALUES (NULL, '$pId', '$com', '$cId');");
    $_SESSION['pId']=$pId;
    header('location: ../comment.php');

?>
<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: ../login.php');
    }

    include '../config.php';

    $pId=$_POST['pId'];
    $com=$_POST['com'];

    mysqli_query($conn, "INSERT INTO `comment` (`cmId`, `pId`, `com`) VALUES (NULL, '$pId', '$com');");
    $_SESSION['pId']=$pId;
    header('location: ../comment.php');

?>
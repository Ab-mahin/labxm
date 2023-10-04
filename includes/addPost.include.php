<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: ../login.php');
    }

    include '../config.php';

    $cId=$_SESSION['cId'];
    $title=$_POST['title'];
    $content=$_POST['content'];
    $date=date("Y-m-d");

    mysqli_query($conn, "INSERT INTO `posts` (`pId`, `cId`, `title`, `content`, `modDate`) VALUES (NULL, '$cId', '$title', '$content', '$date');");
    header('location: ../home.php');

?>
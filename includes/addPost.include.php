<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: ../login.php');
    }

    include '../config.php';

    $cId=$_SESSION['cId'];
    $title=$_POST['title'];
    $content=$_POST['content'];


    mysqli_query($conn, "INSERT INTO `posts` (`pId`, `cId`, `title`, `content`) VALUES (NULL, '$cId', '$title', '$content');");
    header('location: ../home.php');

?>
<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: ../login.php');
    }

    include '../config.php';

    $title=$_POST['title'];
    $content=$_POST['content'];
    $pId=$_POST['pId'];
    $date=date("Y-m-d");
    
    $_SESSION['pId']=$pId;
    $res = mysqli_query($conn, "UPDATE `posts` SET `title`='$title',`content`='$content', `modDate` = '$date' WHERE `pId`='$pId';");
    header('location: ../comment.php');

?>
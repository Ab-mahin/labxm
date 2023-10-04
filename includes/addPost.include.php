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
    mysqli_query($conn, "INSERT INTO `posts` (`pId`, `cId`, `title`, `content`, `modDate`, `img`) VALUES (NULL, '$cId', '$title', '$content', '$date', NULL);");
    $res=mysqli_query($conn, "SELECT * FROM `posts` ORDER BY `pId` DESC LIMIT 1;");
    $blog=mysqli_fetch_assoc($res);
    $pId=$blog['pId'];
    if($_FILES['img']['name']!=""){
        $img="img/".$cId."-".$pId."-".$date."-".$_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],$img);
        mysqli_query($conn, "UPDATE `posts` SET `img`='$img' WHERE `pId`='$pId';");
    }

    $_SESSION['pId']=$pId;
    header('location: ../comment.php');

?>
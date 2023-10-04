<?php
  session_start();

  include '../config.php';

  $cEmail = $_POST['cEmail'];
  $cPass = $_POST['cPass'];
  $cNama = $_POST['cName'];

  $res = mysqli_query($conn, "SELECT * FROM `contributorList` WHERE `cEmail` = '$cEmail';");

  if(!mysqli_num_rows($res)) {
    mysqli_query($conn, "INSERT INTO `contributorList`(`cId`, `cNama`, `cEmail`, `cPass`) VALUES (NULL,'$cNama','$cEmail','$cPass');");
    $res = mysqli_query($conn, "SELECT * FROM `contributorList` WHERE `cEmail` = '$cEmail';");
    $contributor = mysqli_fetch_assoc($res);
    $_SESSION['cId'] = $contributor['cId'];
    header('location: ../home.php');
  }
  else{
    $_SESSION["wrongPass"]=1;
    header('location: ../signup.php');
  }
?>
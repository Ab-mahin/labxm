<?php
  session_start();

  include '../config.php';

  $cEmail = $_POST['email'];
  $cPass = $_POST['pwd'];

  $res = mysqli_query($conn, "SELECT * FROM `contributorList` WHERE `cEmail` = '$cEmail' AND `cPass` = '$cPass';");

  if(mysqli_num_rows($res)) {
    $contributor = mysqli_fetch_assoc($res);
    $_SESSION['cId'] = $contributor['cId'];
    header('location: ../home.php');
  }
  else{
    $_SESSION["wrongPass"]=1;
    header('location: ../login.php');
  }
?>
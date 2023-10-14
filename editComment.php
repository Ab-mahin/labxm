<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: login.php');
    }
    include 'config.php';

    $cmId=$_POST['cmId'];
    $res=mysqli_query($conn, "SELECT * FROM `comment` where `cmId`='$cmId';");
    $comment=mysqli_fetch_assoc($res);
    $_SESSION['pId']=$comment['pId'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<form action="includes/editComment.include.php" method="POST">
    <label>Edit Box:</label><br><br>
    <input type="text" name="com" value="<?php echo $comment['com']?>">
    <br><br>
    <button name="cmId" value="<?php echo $comment['cmId']?>">POST</button><br><br>
  </form>
  <br><br>
  <form action="comment.php" method="POST">
    <button name="pId" value="<?php echo $comment['pId']?>">Cancel</button>
  </form>
</body>
</html>
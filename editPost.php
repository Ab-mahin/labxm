<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: login.php');
    }
    include 'config.php';

    $pId=$_POST['pId'];
    $res=mysqli_query($conn, "SELECT * FROM `posts` where `pId`='$pId';");
    $blogs=mysqli_fetch_assoc($res);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<form action="includes/editPost.include.php" method="POST">
    <label>Edit the tutorial:</label><br><br>
    <label>Title</label><br>
    <input type="text" name="title" value="<?php echo $blogs['title']?>">
    <br><br>
    <label>Description</label><br>
    <input type="text" name="content" value="<?php echo $blogs['content']?>">
    <br><br>
    <button name="pId" value="<?php echo $blogs['pId']?>">POST</button><br><br>
  </form>
  <br><br>
  <form action="comment.php" method="POST">
    <button name="pId" value="<?php echo $blogs['pId']?>">Cancel</button>
  </form>
</body>
</html>
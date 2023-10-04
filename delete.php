<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: login.php');
    }
    include 'config.php';
    $pId=$_POST['pId'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warning</title>
</head>
<body>
    <h3>Are you sure that you want to delete this post?</h3>
    <form action="includes/deletePost.include.php" method="POST">
        <button name="pId" value="<?php echo $pId?>">YES</button>
    </form><br>
    <form action="comment.php" method="POST">
        <button name="pId" value="<?php echo $pId?>">NO</button>
    </form><br><br>
</body>
</html>
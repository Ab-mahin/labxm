<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: login.php');
    }
    include 'config.php';
    $cmId=$_POST['cmId'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warning</title>
</head>
<body>
    <h3>Are you sure that you want to delete this comment?</h3>
    <form action="includes/deleteComment.include.php" method="POST">
        <button name="cmId" value="<?php echo $cmId?>">YES</button>
    </form><br>
    <form action="comment.php" method="POST">
        <button>NO</button>
    </form><br><br>
</body>
</html>
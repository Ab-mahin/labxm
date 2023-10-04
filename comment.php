<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: login.php');
    }
    include 'config.php';
    $pId=0;
    if($_SESSION['pId']!=0){
        $pId=$_SESSION['pId'];
        $_SESSION['pId']=0;
    }
    else $pId=$_POST['pId'];
    $res=mysqli_query($conn, "SELECT * FROM `posts` where `pId`='$pId'");
    $blog=mysqli_fetch_assoc($res);

    $tempCId=$blog['cId'];
    $temp=mysqli_query($conn, "SELECT * FROM `contributorList` where `cId` = $tempCId;");
    $contributor=mysqli_fetch_assoc($temp);

    $com=mysqli_query($conn, "SELECT * FROM `comment` where `pId`='$pId'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $blogs['title']?></title>
</head>
<body>
        <h4><?php echo $blog['title']?></h4>
        <p>Contributor name: <?php echo $contributor['cNama']?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date: <?php echo $blog['modDate']?></p>
        <p><?php echo $blog['content']?></p>
        <h4>Comments</h4>
        <?php
            while($comment = mysqli_fetch_assoc($com)){
                ?>
                    <h4><?php echo $comment['cmId']?>.</h4>
                    <p><?php echo $comment['com']?></p>
                <?php
            }
        ?>
        <form action="includes/addComment.include.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="com" placeholder="Write a comment.....">
            <br><br>
            <button name="pId" value="<?php echo $blog['pId']?>">Comment</button><br><br>
        </form>
</body>
</html>
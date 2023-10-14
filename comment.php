<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: login.php');
    }
    include 'config.php';
    $pId=0;
    if($_SESSION['pId']!=0){
        $pId=$_SESSION['pId'];
    }
    else{
        $pId=$_POST['pId'];
        $_SESSION['pId']=$pId;
    }
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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.2-web/css/all.css">
</head>
<body>
    <div class="container-fluid">
        <?php
            if($_SESSION['cId']!=0){ ?>
                <form action="includes/logout.include.php">
                    <button id = "main-btn">Log out</button>
                </form><br><br>
            <?php }
        ?>

        <form action="home.php">
            <button id = "main-btn" >Home</button>
        </form><br><br>

        <h3><?php echo $blog['title']?></h3>
        <p>Contributor name: <?php echo $contributor['cNama']?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date: <?php echo $blog['modDate']?></p>
        <p><?php echo $blog['content']?></p>
        <?php if($blog['img']!=NULL){?>
            <img src="<?php echo "includes/".$blog['img'] ?>">
        <?php } ?>

        <?php
            if($blog['cId']==$_SESSION['cId']){
            ?>
                <div style="display:flex">
                    <form action="editPost.php" method="post">
                        <button id = "main-btn" name="pId" value="<?php echo $blog['pId']?>">Edit</button>
                    </form>
                    &nbsp;
                    <form action="delete.php" method="post">
                        <button id = "main-btn" name="pId" value="<?php echo $blog['pId']?>">Delete</button>
                    </form>
                </div>
            <?php
            }
        ?>

        <h4>Comments</h4>
            <?php
                while($comment = mysqli_fetch_assoc($com)){
                    $cId=$comment['cId'];
                    $res=mysqli_query($conn, "SELECT * FROM `contributorList` where `cId`='$cId';");
                    $contributor=mysqli_fetch_assoc($res);
                    ?>
                        <h4><?php echo $contributor['cNama']?></h4>
                        <p><?php echo $comment['com']?></p>

                        <?php
                            if($comment['cId']==$_SESSION['cId']){
                            ?>
                                <div style="display:flex">
                                    <form action="editComment.php" method="post">
                                        <button id = "main-btn" name="cmId" value="<?php echo $comment['cmId']?>">Edit</button>
                                    </form>
                                    &nbsp;
                                    <form action="deleteComment.php" method="post">
                                        <button id = "main-btn" name="cmId" value="<?php echo $comment['cmId']?>">Delete</button>
                                    </form>
                                </div>
                            <?php
                            }
                        ?>
                    <?php
                }
            ?>
        <?php if($_SESSION['cId']!=0) { ?>
            <form action="includes/addComment.include.php" method="POST" enctype="multipart/form-data">
                <input id = "com-btn" type="text" name="com" placeholder="Write a comment.....">
                <br><br>
                <button id = "main-btn" name="pId" value="<?php echo $blog['pId']?>">Comment</button><br><br>
            </form>
        <?php } ?>
    </div>
</body>
</html>
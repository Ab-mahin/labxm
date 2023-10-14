<?php
    session_start();
    if(!isset($_SESSION['cId'])) {
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    <form  action="includes/addPost.include.php" method="POST" enctype="multipart/form-data">
        <h4>Write a tutorial:</h4>
        <label>Title</label><br>
        <input type="text" name="title" placeholder="Knowledge is power........">
        <br><br>
        <label>Description</label><br>
        <input type="text" name="content" placeholder="Description">
        <br><br>
        <input type="file" name="img"><br><br>
        <button id = "main-btn">POST</button><br><br>
    </form>
    <?php 
    }
    else{
        ?>
        <form action="login.php">
            <button id = "main-btn">Log In</button>
        </form><br><br>

        <?php
    }
?>
  <?php
    include 'config.php';
    $res=mysqli_query($conn, "SELECT * FROM `posts` ORDER BY `pId` DESC");
    while($blogs=mysqli_fetch_assoc($res)){
        
        $tempCId=$blogs['cId'];
        $temp=mysqli_query($conn, "SELECT * FROM `contributorList` where `cId` = $tempCId;");
        $contributor=mysqli_fetch_assoc($temp);
        ?>
        <h3><?php echo $blogs['title']?></h3>
        <p>Contributor name: <?php echo $contributor['cNama']?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date: <?php echo $blogs['modDate']?></p>

        <?php
            if($blogs['cId']==$_SESSION['cId']){
            ?>
                <div style="display:flex">
                    <form action="editPost.php" method="post">
                        <button id = "main-btn" name="pId" value="<?php echo $blogs['pId']?>">Edit</button>
                    </form>
                    &nbsp;
                    <form action="delete.php" method="post">
                        <button id = "main-btn" name="pId" value="<?php echo $blogs['pId']?>">Delete</button>
                    </form>
                </div>
            <?php
            }
        ?>
        <br>
        <form action="comment.php" method="post">
            <button id = "main-btn" name="pId" value="<?php echo $blogs['pId']?>">See More</button>
        </form>
        <br><br>
        <?php
    }
  ?>
    </div>
</body>
</html>
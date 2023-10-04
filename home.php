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
</head>
<body>

<form action="includes/logout.include.php">
    <button>Log out</button>
</form><br><br>

<form action="includes/addPost.include.php" method="POST">
    <h4>Write a tutorial:</h4>
    <label>Title</label><br>
    <input type="text" name="title" placeholder="Knowledge is power........">
    <br><br>
    <label>Description</label><br>
    <input type="text" name="content" placeholder="Description">
    <br><br>
    <button>POST</button><br><br>
  </form>
  <?php
    include 'config.php';
    $res=mysqli_query($conn, "SELECT * FROM `posts`");
    while($blogs=mysqli_fetch_assoc($res)){
        ?>
        <h4><?php echo $blogs['title']?></h4>
        <p><?php echo $blogs['content']?></p>
        <?php
            if($blogs['cId']==$_SESSION['cId']){
            ?>
                <div style="display:flex">
                    <form action="editPost.php" method="post">
                        <button name="pId" value="<?php echo $blogs['pId']?>">Edit</button>
                    </form>
                    &nbsp;
                    <form action="includes/deletePost.include.php" method="post">
                        <button name="pId" value="<?php echo $blogs['pId']?>">Delete</button>
                    </form>
                </div>
            <?php
            }
        ?>
        <br><br>
        <?php
    }
  ?>
</body>
</html>
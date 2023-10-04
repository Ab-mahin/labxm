<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="includes/style.css">
  <title>User login</title>
</head>
<body>
    <?php
        session_start();
        if($_SESSION["wrongPass"]){
            ?>
            <p>
                <?php echo "Email is already used.";?>
            </p>
            <?php
        }
        $_SESSION["wrongPass"]=0;
    ?>
  <form action="includes/signup.include.php" method="POST">
    <label>Name</label><br>
    <input type="text" name="cName" placeholder="Enter your name">
    <br><br>
    <label>Email</label><br>
    <input type="text" name="cEmail" placeholder="Enter your email">
    <br><br>
    <label>Password</label><br>
    <input type="password" name="cPass" placeholder="Enter your password">
    <br><br>
    <button>Sign Up</button><br><br>
  </form><br><br>
</body>
</html>
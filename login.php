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
                <?php echo "Wrong Email or Password";?>
            </p>
            <?php
        }
        $_SESSION["wrongPass"]=0;
    ?>
  <form action="includes/login.include.php" method="POST">
    <label>Email</label><br>
    <input type="text" name="email" placeholder="Enter your email">
    <br><br>
    <label>Password</label><br>
    <input type="password" name="pwd" placeholder="Enter your password">
    <br><br>
    <button>Log In</button><br><br>
  </form><br><br>

  <form action="signup.php">
    <button>Sign Up</button>
  </form>
</body>
</html>
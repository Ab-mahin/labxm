<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="includes/style.css">
  <title>User login</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./fontawesome-free-6.4.2-web/css/all.css">
</head>
<body>
  <section>

  <div class="container" id = "se-log">
    <div id = "login" class="row">
    <?php
        session_start();
        if($_SESSION["wrongPass"]){
            ?>
            <p style="font-size: 15px;">
                <?php echo "Wrong Email or Password";?>
            </p>
            <?php
        }
        $_SESSION["wrongPass"]=0;
    ?>
    <form action="includes/login.include.php" method="POST">
      <input id = "log-btn" type="text" name="email" placeholder="*Email">
      <hr id = "new">
      <input id = "log-btn" type="password" name="pwd" placeholder="*Password">
      <hr id = "new">
      <br><br>
      <button id = "main-btn">Log In</button>
    </form>

    <form action="signup.php">
      <button id = "main-btn" >Sign Up</button>
    </form>
    </div>
  </div>

  </section>
    


<script src="./js/bootstrap.min.js"></script>
<script src="./js/main.js"></script>
<script src="./fontawesome-free-6.4.2-web/js/all.js"></script>

</body>
</html>
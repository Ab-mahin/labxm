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
<div class="container" id = "se-log">

<div id = "login" class="row">

    <?php
          session_start();
          if($_SESSION["wrongPass"]){
              ?>
              <p style="font-size: 15px;">
                  <?php echo "Email is already used.";?>
              </p>
              <?php
          }
          $_SESSION["wrongPass"]=0;
      ?>
      <form action="includes/signup.include.php" method="POST">
        <input id = "log-btn" type="text" name="cName" placeholder="*Name">
        <hr id = "new">
        <input id = "log-btn" type="text" name="cEmail" placeholder="*Email">
        <hr id = "new">
        <input id = "log-btn" type="password" name="cPass" placeholder="*Password">
        <hr id = "new">
        <button id = "main-btn">Sign Up</button><br><br>
      </form><br><br>

    </div>

</div>
    
      
</body>
</html>
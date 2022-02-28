<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <header>

  <nav class="navbar">
          
<header>

<nav class="navbar">
    <a href="Index.php" class="linkat">Home</a>
            <a href="home.php" class="linkat">Product</a>
            <a href="about-us.php" class="linkat">About us</a>
            <a href="contact-us.php" class="linkat">Contact us</a>
            <a href="login.php" class="linkat">Log in</a>
    
</nav>

</header>
      
  </nav>

</header>
   
   
<link rel="stylesheet" href="signup.css"></head>

<div id="login-box">

  <div class="left">
    <h1>Sign up</h1>
    
   
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="name" placeholder="name..."> <br><br>
        <input type="text" name="surname" placeholder="surname..."> <br><br>
        <input type="text" name="email" placeholder="email..."> <br><br>
        <input type="text" name="username" placeholder="username..."><br><br>
        <input type="password" name="password" placeholder="password..."><br><br>
        <input type="text" name="roli" placeholder="roli..."><br><br>

        <input type="submit" name="registerBtn" value="register"><br><br>
    </form>

  
  
   </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>
   <?php include_once 'registerController.php';?>
</body>
</html>
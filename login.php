
<?php



include_once 'userRepository.php';

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {

		// Hashing the password
		$password = md5($_POST['password']);
    $user = new UserRepository();

    $user = $user->getUser($_POST['username'], $_POST['password']);

    if ($user) {
        $_SESSION['username'] = $user['Username'];
        $_SESSION['roli'] = $user['roli'];
        header("Location: home.php");
      }  else {
      $_SESSION['message'] = "User with that email and password couln't be found";
      if($user->isAdmin()) header("Location: dashboard.php");
      else header("Location: home.php");
    }
}
	


?>


<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=egde">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <header>

  <nav class="navbar">
          
<header>

<nav class="navbar">
        
            <a href="Index.php" class="home">Home</a>
            <a href="home.php" class="home">Product</a>
            <a href="about-us.php" class="home">About us</a>
            <a href="contact-us.php" class="home">Contact us</a>
    
</nav>

</header>

</nav>

</header>


  <div class=card-wrap>

    <div class="left " >
      <h1>JUST DO IT.</h1>
      <img class="nike" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Logo_NIKE.svg/2000px-Logo_NIKE.svg.png" height= 50px width="100px">
      <a class="acc-button" href="register.php"> Create An Account</a>



    </div>


    <div class=right>
      <h2>Sign In</h2>

      <div class="info-wrap">
    <form  method="post">
      <input type="text" name="username" id="username" placeholder="username"><br><br>
      <input type="password" name="password" id="password" placeholder="password"><br><br>
    <!-- <input type="submit" name="loginBtn" value="Login"> -->
    <div class="submit-wrap">
            <a href=# name="loginbtn"  onclick="Metoda1()" class="submit"  type="submit" value="sign In" >Log In</a>
    </form>

  </div>
      </form>

    </div>


  </div>
  <script>

function Metoda1(){
  let email = document.querySelector('#username').value;
  let password = document.querySelector('#password').value

  if(email.length < 5){
      alert('Username duhet te jet me 5 karaktere');
  }else if (password.length < 5) {
      alert('Password duhet te jet me 6 karaktere');
  } else {
    document.getElementsByTagName('form')[0].submit();
  }

}
</script>
</div>
</body>
</html>
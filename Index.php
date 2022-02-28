<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Awesome Nike Shoe Landing Page</title>
</head>
<body>
     <div class="container">
         <div class="navbar">
            <img src="images/logo-index-html.png" class="logo">
             <nav>
                <ul class="green">
                    <li><a href="Index.php"class="index-a">Home</a></li>
                    <li><a href="home.php"class="index-a">Products</a></li>
                    <li><a href="about-us.php"class="index-a">About Us</a></li>
                    <li>
                        <?php           
                            if(isset($_SESSION['username']) ) echo "<a href='logout.php' class='index-a'>Log Out</a>";
                            else echo "<a href='login.php' class='index-a'>Log in</a>";
                        ?>
                    </li>
                    <li><a href="dashboard.php" class="homee; <?php echo $hide?>">Dashboard</a><li>
                    
                </ul>
             </nav>
          
             
         </div>
         <div class="content">
             <h1><span class="red">Nike</span> <span class="style">Shoes</span></h1>
             <p>Nike, Inc. is an American multinational corporation that is <br>engaged in the design, development, manufacturing, and worldwide <br>marketing and sales of footwear, apparel, equipment, accessories,<br> and services. 
            </p> 
            <div class="text">
                <button class="btn">Buy Now</button>
                <div class="social-media">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa icons fa-facebook"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa icons fa-instagram"></i></a>
                    <a href="https://twitter.com/?lang=en" target="blank_"><i class="fa icons fa-twitter"></i></a>
                </div>
            </div>       
        </div>
        <img src="images/nike-image-of-index-html.png" class="image">
     </div>
     
    
</body>
</html>
<?php

session_start();

if(!isset($_SESSION['username'])){ 
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="el">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=egde">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="product.css"></head>
<body>
  <header>
      <div id="menu-bar" class="fa fa-bars" ><img src="img/nike.PNG" alt="Nike icon"></div>
      <div href="#" class="logo"><img src="images/Capture-image-of-product-about-us-html.JPG" alt="Nike icon"></div>


      <nav class="navbar">
          <a href="index.php" class="homee">Home</a>
          <a href="home.php" class="homee">Product</a>
          <a href="about-us.php" class="homee">About us</a>
          <a href="contact-us.php" class="homee">Contact u s</a>
          <?php           
            if($_SESSION['username']) echo "<a href='logout.php' class='homee'>Log out</a>";
            else echo "<a href='login.php' class='homee'>Log in</a>";
          ?>

      </nav>

  </header>
  <section class="product" id="product">
      <h1 class="heading"> <span>Products</span></h1>
      <div class="box-container">
          <div class="box">
              <div class="icons">
                  <a href="#" class="fa fa-heart"></a>
                  <a href="#" class="fa fa-share"></a>
                  <a href="#" class="fa fa-eye"></a>
              </div>
              <div class="content">
                  <img src="images/pic1-of-product-html.jfif" alt="">
                  <h3>Air Jordan 1 Retro </h3>
                  <div class="price">$170 </div>
                  <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>
          </div>
          <div class="box">
              <div class="icons">
                  <a href="#" class="fa fa-heart"></a>
                  <a href="#" class="fa fa-share"></a>
                  <a href="#" class="fa fa-eye"></a>
              </div>
              <div class="content">
                  <img src="images/pic2-of-product-html.jfif" alt="">
                  <h3>Air Jordan 1 High</h3>
                  <div class="price">$200 </div>
                  <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>
          </div>
          <div class="box">
              <div class="icons">
                  <a href="#" class="fa fa-heart"></a>
                  <a href="#" class="fa fa-share"></a>
                  <a href="#" class="fa fa-eye"></a>
              </div>
              <div class="content">
                  <img src="images/pic3-of-product-html.jfif" alt="">
                  <h3>Jordan Series .02 "Dear Deloris"</h3>
                  <div class="price">$120 <span>$80</span></div>
                  <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>
          </div>
          <div class="box">
              <div class="icons">
                  <a href="#" class="fa fa-heart"></a>
                  <a href="#" class="fa fa-share"></a>
                  <a href="#" class="fa fa-eye"></a>
              </div>
              <div class="content">
                  <img src="images/pic4-of-product-html.jfif" alt="">
                  <h3>Air Jordan 1 Low SE</h3>
                  <div class="price">$110</div>
                  <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>
          </div>
          <div class="box">
              <div class="icons">
                  <a href="#" class="fa fa-heart"></a>
                  <a href="#" class="fa fa-share"></a>
                  <a href="#" class="fa fa-eye"></a>
              </div>
              <div class="content">
                  <img src="images/pic5-of-product-html.jfif" alt="">
                  <h3>Nike Shoes</h3>
                  <div class="price">$130</div>
                  <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>
          </div>
          <div class="box">
              <div class="icons">
                  <a href="#" class="fa fa-heart"></a>
                  <a href="#" class="fa fa-share"></a>
                  <a href="#" class="fa fa-eye"></a>
              </div>
              <div class="content">
                  <img src="images/pic6-of-product-html.jfif" alt="">
                  <h3>Nike Shoes</h3>
                  <div class="price">$130</div>
                  <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>

          </div>
          <div class="box">
              <div class="icons">
                  <a href="#" class="fa fa-heart"></a>
                  <a href="#" class="fa fa-share"></a>
                  <a href="#" class="fa fa-eye"></a>
              </div>
              <div class="content">
                  <img src="images/pic7-of-product-html.jpg" alt="">
                  <h3>Nike Air Force 1 '07 </h3>
                  <div class="price">$90 </div>
                  <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>
          </div>
          <div class="box">
              <div class="icons">
                  <a href="#" class="fa fa-heart"></a>
                  <a href="#" class="fa fa-share"></a>
                  <a href="#" class="fa fa-eye"></a>
              </div>
              <div class="content">
                  <img src="images/pic8-of-product-html.jpg" alt="">
                  <h3>Nike Air Zoom  </h3>
                  <div class="price">$130 </div>
                  <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>

          </div><div class="box">
              <div class="icons">
                  <a href="#" class="fa fa-heart"></a>
                  <a href="#" class="fa fa-share"></a>
                  <a href="#" class="fa fa-eye"></a>
              </div>
              <div class="content">
                  <img src="images/pic9-of-product-html.jpg" alt="">
                  <h3>Nike Air Force 1 FlyKnit </h3>
                  <div class="price">$110 </div>
                  <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>
          </div>
          <div class="box">
              <div class="icons">
                  <a href="#" class="fa fa-heart"></a>
                  <a href="#" class="fa fa-share"></a>
                  <a href="#" class="fa fa-eye"></a>
              </div>
              <div class="content">
                  <img src="images/pic10-of-product-html.jpg" alt="">
                  <h3>Nike Air Zoom 36 </h3>
                  <div class="price">$89.97 <span>$120</span></div>
                  <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>
          </div>
          <div class="box">
              <div class="icons">
                  <a href="#" class="fa fa-heart"></a>
                  <a href="#" class="fa fa-share"></a>
                  <a href="#" class="fa fa-eye"></a>
              </div>
              <div class="content">
                  <img src="images/pic11-of-product-html.jpg" alt="">
                  <h3>Nike Air Force 1/1 </h3>
                  <div class="price">$132.97 <span>$140</span></div>
                  <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>
          </div>
          <div class="box">
              <div class="icons">
                  <a href="#" class="fa fa-heart"></a>
                  <a href="#" class="fa fa-share"></a>
                  <a href="#" class="fa fa-eye"></a>
              </div>
              <div class="content">
                  <img src="images/pic12-of-product-html.jpg" alt="">
                  <h3>Nike Air Force 1 Crater </h3>
                  <div class="price">$110 </div>
                  <div class="stars">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                  </div>
              </div>
          </div>
      </div>

  </section>
    <!-- <h1>Home</h1> -->
    <?php
    if (isset($_SESSION['userid'])){
        echo '<p>you are logged in</p>';
    }else{
        echo '<p>you are not logged in</p>';
    }
    ?>
</body>
</html>
<?php
//}
?>

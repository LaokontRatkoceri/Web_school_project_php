<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="about-us.css">

</head>
<body>
    <header>
     
        <div href="#" class="logo"><img src="images/Capture-image-of-product-about-us-html.JPG" alt="Nike icon" ></div>
        <nav class="navbar">
            <a href="Index.php" class="linkat">Home</a>
            <a href="home.php" class="homee">Product</a>
            <a href="about-us.php" class="linkat">About us</a>
            <a href="contact-us.php" class="linkat">Contact us</a>
            <?php           
                            if(isset($_SESSION['username']) ) echo "<a href='logout.php' class='index-a'>Log Out</a>";
                            else echo "<a href='login.php' class='index-a'>Log in</a>";
                        ?>
        </nav>
        </div>
    </header>
    <div class="about-section">
        <div class="inner-container">
            <h1 class="titulli-about">
                About Us
             
            </h1>
            <p class="text">
                We are a Kosovoan multinational corporation that is engaged in the design, development, manufacturing,
                and worldwide marketing and sales of footwear, apparel, equipment, accessories, and services.
                The company is headquartered near Prishtina, Kosovo, Albania, in the Prishtina metropolitan area.
                We are the world's largest supplier of athletic shoes and apparel and a major manufacturer of sports equipment, 
                We were founded on January 25, 2020, by Laokont Ratkoceri and Shqipron Ramadani, and officially became Unike, Inc.
                on January 30, 2022. The company takes its name from Unike, the Greek word for special. Unike markets its products under its own brand, as well as Unike Golf, Unike Pro, Unike+,
                Air Jordan, Unike Blazers, Air Force 1, Nike Dunk, Air Max, Foamposite, Unike Skateboarding, Unike CR7, and subsidiaries including Jordan Brand and Converse.
                Unike also owned Bauer Hockey from 1995 to 2008, and previously owned Nike,Cole Haan, Umbro, and Hurley International.
                  
            </p>
            <button class="lexo">Lexo me shume</button>
        </div>
    </div>
</body>

</html>
<?php
//}
?>
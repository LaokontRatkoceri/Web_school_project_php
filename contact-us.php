<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="contact-us.css">
</head>
<body>
    <header class="header2">
            <div href="#" class="logo"> <img src="images/Capture-image-of-product-about-us-html.JPG" alt="Nike icon"></div>

            <nav class="navbar">
            <a href="Index.php" class="linkat">Home</a>
            <a href="<home></home>.php" class="linkat">Product</a>
            <a href="about-us.php" class="linkat">About us</a>
            <a href="contact-us.php" class="linkat">Contact</a>
            <?php           
                            if(isset($_SESSION['username']) ) echo "<a href='logout.php' class='index-a'>Log Out</a>";
                            else echo "<a href='login.php' class='index-a'>Log in</a>";
                        ?>
        </nav>

    </header >
    <div class="about-section">
        <div class="inner-container">
            <h1 class="titulli-about">
                Contact us
            </h1>
            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="wrapper">
                                <div class="row no-gutters">
                                    <div class="col-md-6 d-flex align-items-stretch">
                                        <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                                            <h3 class="mb-4">Write us</h3>
                                            <div id="form-message-warning" class="mb-4"></div> 
                                      <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                      </div>
                                            <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12"> 
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="submit" value="Send Message" class="btn btn-primary">
                                                            <div class="submitting"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-flex align-items-stretch">
                                        <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
                                            <h3>Contact information</h3>
                                            <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                                      </div>
                                  </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                        <p><span>Phone:</span> <a href="tel://1234567920">+381 63 7502187</a></p>
                                      </div>
                                  </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">Laokontratkoceri@gmail.com</a></p>
                                      </div>
                                  </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-globe"></span>
                                        </div>
                                        <div class="text pl-3">
                                        <p><span>Website</span> <a href="#">yoursite.com</a></p>
                                      </div>
                                  </div>
                              </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <<form>
		        <input name="name" placeholder="What is your name?" class="name" required />
		        <input name="emailaddress" placeholder="What is your email?" class="email" type="email" required />
                <textarea rows="4" cols="50" name="subject" placeholder="Please enter your message" class="message" required></textarea>
                <input name="submit" class="btn" type="submit" value="Send" /> -->
            <!-- </form> 
            <div class="put">
            <label for="name">Name</label>
            <input type="text" id="name" name="name"><br>
            <label for="Email">Email</label>
            <input type="email" id="emai" name="email"><br>
            <label for="Messege">Messege</label>
            <input type="Messege" id="Messege" name="Messege">
            <button type="submit" id="Submit"> -->
            
            </div>
            </p>
        </div>
    </div>
</body>
</html>

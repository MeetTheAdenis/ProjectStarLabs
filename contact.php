<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="responsive.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Lora"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>Apple Products</title>
  </head>

  <body>

    <!-- Hero Section -->

    <div class="hero-section">
      <div class="container">
        <div class="header">
          <h1 class="logo">Apple.</h1>
          <div class="nav">
            <a href="index.php">Home</a>
            <a href="mac.php">Mac</a>
            <a href="iphone.php">iPhone</a>
            <a href="tv.php">TV</a>
            <a href="contact.php">Contact Us</a>
          </div>
          <div class="buttons">
            <a href="login.php" class="button">Log In</a>
            <a href="sign-up.php" class="button">Sign Up</a>
          </div>
        </div>
         <br/>
    <!--ENDSSS-->

    <div class="contact-section">
      <div class="container">
         <div class="wrapper-row">
           <div class="contact-form contact-box">
             <h2 class="form-title">Contact Us</h2>
              <!-- te dergon te file ku kerkohet te mbushen fushat -->
              <?php include_once 'controller/contactController.php' ?>
             <form action="contact.php" method="post" name="contactForm">
                  <div class="form-group">
                      <input type="text" name="name" placeholder="Your Name" class="input-control">
                  </div>
  
                  <div class="form-group">
                      <input type="text" name="surname" placeholder="Your Surname" class="input-control">
                  </div>
  
                  <div class="form-group">
                      <input type="text" name="email" placeholder="Your Email" class="input-control">
                  </div>
                  <div class="form-group">
                    <textarea class="textarea-control" name="description" id="message" cols="20" rows="10" placeholder="Enter your message here"></textarea>
                  </div>
                  <button type="submit" name="registerBtn" class="btn-form">Send</button>
              </form>
           </div>
         </div>
      </div>
    </div>
       


  
   
    <!-- Footer-----------------------  FOOTER-->
  
    <div class="footer">
      <div class="container">
        <div class="footer-boxes">
          <div class="footer-box">
            <h2>Apple</h2>
            <p>
                Apple.com is a convenient place to purchase Apple
                 products and accessories from Apple and other manufacturers. 
                You can buy online or call
            </p>

            <div class="footer-social">
              <i class="fa fa-"></i>
              <i class="fa fa-youtube-play"></i>
              <i class="fa fa-facebook"></i>
            </div>
          </div>

          <div class="footer-box">
            <h3 class="footer-titles"> Online or Call</h3>

            <ul>
              <li><a href="#">Find a store</a></li>
              <li><a href="#">Shop online</a></li>
              <li><a href="#">Shopping help</a></li>
              <li><a href="#">Apple trade in</a></li>
              <li><a href="#">Order status</a></li>
            </ul>
          </div>

          <div class="footer-box">
            <h3 class="footer-titles">Services</h3>

            <ul>
              <li><a href="#">Apple TV</a></li>
              <li><a href="#">iCloud</a></li>
              <li><a href="#">Apple Books</a></li>
              <li><a href="#">Apple One</a></li>
            </ul>
          </div>

          <div class="footer-box">
            <h3 class="footer-titles">Support</h3>

            <ul>
              <li><a href="#">Apple Policy</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Help</a></li>
            </ul>
          </div>

          <div class="footer-box">
            <h3 class="footer-titles">Address</h3>

            <ul>
              <li>Republic of Kosovo</li>
              <li>
                Pristina 10000, Rruga B
              </li>
              <li>apple@icloud.com</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    
  </body>
</html>
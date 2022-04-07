<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <link rel="stylesheet" type="text/css" href="responsive.css" />
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

    <form action="tvAddProduct.php" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label>Shto Produktin te faqja TV</label>
            <input type="text" name="title" placeholder="Title" class="input-control">
        </div>

        <div class="form-group">
            <input type="text" name="subtitle" placeholder="Subtitle" class="input-control">
        </div>
                  
        <div  class="form-group">
          <label>Select Image File:</label>
          <input type="file" name="image">
        </div>
        <button type="submit" name="registerBtn" class="btn-form">Create</button>
        <!-- te dergon te file ku kerkohet te mbushen fushat -->
        <?php include_once 'controller/tvProductController.php' ?>
    </form>


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
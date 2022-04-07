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

        <div class="top-title">
          <p>Introducing</p>
          <div class="middle-line"></div>
        </div><br/>
    <!--ENDSSS-->

     

   <!--  THE SLIDER   -->

      <!-- Slideshow container -->
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img/img4.png" style="width:100%">
            <div class="text">Apple Watch</div>
          </div>
      
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img/img3.png" style="width:100%">
            <div class="text">MacBook</div>
          </div>
      
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img/img2.png" style="width:100%">
            <div class="text">iPhone</div>
          </div>
      
        <!-- Next and previous buttons -->
           <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
           <a class="next" onclick="plusSlides(1)">&#10095;</a>
         </div>
        <br>
      
      <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
      
            <!--THE SLIDER ENDS HERE  and the script link added with JAVASCRIPT
             is in the end of this page-->
      <!-- News insights-->
      <div class="news-insights-section">
        <div class="container">
          <div class="top-news">
            <h2 class="title">Apple Watch</h2>
            <a href="#" class="more">
              See more &nbsp; &nbsp; <i class="fa fa-angle-right"></i
            ></a>
          </div>
          <!-- shfaqet produkti pasi e shfaqim ne dashboard-->
          <div class="news-container">
            <?php 
              include_once 'tvProductRepository.php';
              $productRepository  = new tvProductRepository();
              $products = $productRepository->getAllProducts();
              foreach($products as $product): ?>
                  <div class="news4">
                  <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($product['image']); ?>" height="100" width="100" />

                  <div>
                    <h4><?= $product['subtitle'] ?></h4>
                    <p> <?= $product['title'] ?></p>
                  </div>
                </div>
            
            <?php endforeach; ?>
            </div>

          <div class="news-container">
            <div class="news1">
              <div class="news1-image"></div>

              <div class="news1-info">
                <h4>Connect Apple Watch with your TV</h4>
                <p>
                  Out of concern for the health and safety of our developers,
                  employees, and local communities — and in line with recent ...
                </p>
                <div class="news1-detais">
                  <img src="img/atv1.jpg" alt="" width="100px" />
                  <div>
                    <p class="news1-name">Apple TV</p>
                    <p class="news1-title">2021</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="news2">
              <img src="img/atv3.png" alt="" />

              <div>
                <h4></h4>
                <p> </p>
              </div>
            </div>

            <div class="news3">
              <img src="img/atv1.jpg" alt="" />

              <div>
                <h4>Shop early to get all your gifts in time for the holidays</h4>
                <p> Apple TV</p>
              </div>
            </div>
            <div class="news4">
              <img src="img/atv2.jpg" alt="" />

              <div>
                <h4>Shop early to get all your gifts in time for the holidays</h4>
                <p> Apple TV</p>
              </div>
            </div>
            <div class="news5">
              <img src="img/atv1.jpg" alt="" />

              <div>
                <h4>Shop early to get all your gifts in time for the holidays</h4>
                <p>Apple TV</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- News insights end-->

  
   
    <!-- Footer-----------------------  FOOTER-->
  
    <div class="footer">
      <div class="container">
        <div class="footer-boxes">
          <div class="footer-box">
            <h2>Apple</h2>
            <p>
              The Apple One free trial includes only services that you are not currently using through
               a free trial or a subscription. Plan automatically renews after trial until cancelled.
               Restrictions and other terms apply.
            </p>

            <div class="footer-social">
              <i class="fa fa-instagram"></i>
              <i class="fa fa-youtube-play"></i>
              <i class="fa fa-facebook"></i>
            </div>
          </div>

          <div class="footer-box">
            <h3 class="footer-titles">Apple Store</h3>

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
            <h3 class="footer-titles">Contact Us</h3>

            <ul>
              <li><a href="#">adenisshala@icloud.com</a></li>
              <li>
                <a href="#">Pristina 10000, Rr.B Republic of Kosovo</a>
              </li>
              <li><a href="#">(+383) 0497495398</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
 

    <!-- THE JAVASCRIPT link-->
    <script type="text/javascript" src="jscript.js">
      
    </script>
    
    
  </body>
</html>
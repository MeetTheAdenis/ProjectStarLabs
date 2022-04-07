<?php
  session_start();

?>

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
            <?php if($_SESSION['ROLE']){ ?>
              <a href="logout.php">Logout</a>

            <?php } else { ?>
              <a href="login.php" class="button">Log In</a>
              <a href="sign-up.php" class="button">Sign Up</a>
  
              <?php }
            ?>

          </div>
        </div>

        <div class="top-title">
          <p>Introducing</p>
          <div class="middle-line"></div>
        </div>

        <div class="hero-title">
          <h2>
            <span>Get the newest</span> apple to fund HIV/AIDS treatment coworking space to realize your
            innovation
          </h2>
          <p>
            For 14 years, our partnership with (RED) has led to almost $250 mill
            in donations to fund HIV/AIDS treatment programs. Choose RED
            save lives. Get the newest!
            
          </p>
        </div>

        <div class="hero-form">
          <form action="#">
            <h3>Buy yours here now</h3>
            <input
              type="text"
              id="fname"
              name="fname"
              value="Name"
            /><br /><br />
            <input
              type="text"
              id="fname"
              name="fname"
              value="Surname"
            /><br /><br />
            <input
              type="text"
              id="fname"
              name="fname"
              value="E-Mail"
            /><br /><br />
            <input type="submit" value="BUY" />
          </form>
          <img src="img/hispeed.jpg" alt="" width="900px;"/>
        </div>
      </div>
    </div>
    <!-- Hero Section End -->

    

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

      


    <!-- Our Space Section -->
    <div class="our-space-section">
      <div class="container">
        <div class="top">
          <h2 class="title">iPhone</h2>
          <p>
            Our space is designed to give you a different experience <br />
            when working with your team or personally
          </p>
          <div class="arrows">
            <a href="#"> <img src="images/dark-arrow.png" alt="" /></a> &nbsp;
            &nbsp;
            <a href="#"> <img src="images/orange-arrow.png" alt="" /></a>
          </div>
        </div>

        <div class="space-boxes">
          <div class="space-box">
            <div class="image1">
              <i class="fa fa-angle-right"></i>
            </div>
            <p>64 GB</p>
          </div>

          <div class="space-box">
            <div class="image2">
              <i class="fa fa-angle-right"></i>
            </div>
            <p>128 GB</p>
          </div>

          <div class="space-box">
            <div class="image3">
              <i class="fa fa-angle-right"></i>
            </div>
            <p>256 GB</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Space Section End -->


    <!-- shfaqet produkti pasi e shfaqim ne dashboard-->
    <div class="news-container">
            <?php 
              include_once 'homeProductRepository.php';
              $productRepository  = new homeProductRepository();
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



    
      
    <!-- Why Frispes -->
    <div class="why-frispes-section">
      <div class="container">
        <div class="why-frispes-box box1">
          <div class="icon-box">
            <i class="fa fa-line-chart"></i>
            <div>
              <span class="nr"> 259$</span> <br />
              <span class="description"> AirPods Pro2</span>
            </div>
          </div>
          <div class="icon-box">
            <i class="fa fa-line-chart"></i>
            <div>
              <span class="nr"> 599$</span> <br />
              <span class="description"> Apple Watch 6</span>
            </div>
          </div>
          <div class="icon-box">
            <i class="fa fa-line-chart"></i>
            <div>
              <span class="nr"> 999$</span> <br />
              <span class="description"> iPhone 12 </span>
            </div>
          </div>
          <div class="icon-box">
            <i class="fa fa-line-chart"></i>
            <div>
              <span class="nr"> 1100$</span> <br />
              <span class="description"> iPhone 12 Pro</span>
            </div>
          </div>
          <div class="icon-box">
            <i class="fa fa-line-chart"></i>
            <div>
              <span class="nr"> 300$</span> <br />
              <span class="description"> Apple Watch 4</span>
            </div>
          </div>
          <div class="icon-box">
            <i class="fa fa-line-chart"></i>
            <div>
              <span class="nr"> 99$</span> <br />
              <span class="description"> Air Pods</span>
            </div>
          </div>
        </div>

        <div class="why-frispes-box box2">
          <div class="top-title">
            <p> Apple </p>
            <div class="middle-line"></div>
          </div>
          <h2 class="title">Perfect for everyone in their circle.</h2>
          <p>
            With a decade of insights and expertise, we're decided to reimagine
            co-working space, designed to help a new startup grow up and realize
            their ideas so they can give a positive impacts on many people
          </p>
        </div>
      </div>
    </div>

    <!-- Why Frispes End -->

    <!-- Facilites -->
    <div class="facilities-section">
      <div class="container">
        <div class="top-title">
          <p>Mac Products</p>
          <div class="middle-line"></div>
        </div>
        <h2 class="title">
          Welcome to the future <br />
          of Macbook
        </h2>

        <div class="facilities-boxes">
          <div class="facilities-menu">
            <a href="#"> MacBook Pro 16'</a>
            <a href="#"> MacBook Pro 13'</a>
            <a href="#"> Mac Mini</a>
            <a href="#"> MacBook Air 15.6'</a>
            <a href="#"> MacBook Air 13'</a>
          </div>

          <img src="img/macbook2.png" alt="" width="700px;"/>
        </div>
      </div>
    </div>
    <!-- Facilites End -->

    <!-- Gallery Section -->
    <div class="gallery-section">
      <div class="container">
        <div class="center-top">
          <div class="gallery-top">
            <div class="top-title">
              <p>Mac Accessories</p>
              <div class="middle-line"></div>
            </div>
            <h2 class="title">
              Make the perfect <br />
              connection  
            </h2>
          </div>

          <div class="arrows">
            <a href="#"> <img src="images/dark-arrow.png" alt="" /></a> &nbsp;
            &nbsp;
            <a href="#"> <img src="images/orange-arrow.png" alt="" /></a>
          </div>
        </div>

        <div class="gallery-boxes">
          <img src="img/acc1.jpg" alt="" width="250px" height="270px"/>
          <img src="img/acc1.jpg" alt="" width="250px" height="270px" />
          <img src="img/acc1.jpg" alt="" width="250px" height="270px" />
        </div>
      </div>
    </div>

    <!-- Gallery Section End -->

    <!-- Use Frispes -->
    <div class="use-frispes-section">
      <div class="container">
        <div class="center-top">
          <h2 class="title">Welcome to Apple Support</h2>
          <p>Big brands, small bussiness, new startuo and inividuals</p>
        </div>

        <div class="use-frispes-boxes">
          <img src="images/Logo (5).png" alt="nje foto" />
          <img src="images/Logo (4).png" alt="nje foto" />
          <img src="images/Logo (5).png" alt="nje foto" />
          <img src="images/Logo (4).png" alt="nje foto" />
          <img src="images/Logo (5).png" alt="nje foto" />
        </div>
      </div>

      <!-- Use Frispes End-->

      <!-- Customer reviews-->

      <div class="customer-reviews-section">
        <div class="container">
          <div class="top-title">
            <p>Reviews</p>
            <div class="middle-line"></div>
          </div>
          <h2 class="title">
            What our <br />
            customers are <br />
            saying
          </h2>

          <div class="review-boxes">
            <div class="review-box">
              <p class="customer-description">
                Our team has been working at frispes for almost 2 months because
                our office still closed. During working at frispes, we feel a
                new experience, we can feel working with a beautiful, modern,
                and comfortable space. And cozy cafe with high-speed internet in
                there. Thank you for frispes and team.
              </p>
              <div class="customer-info">
                <img src="images/Ellipse 2.png" alt="" />
                <div class="customer-detais">
                  <p class="customer-name">
                    Adenis <br />
                    Shala
                  </p>
                  <p class="customer-title">
                    UI Designer at <br />
                    Frakton
                  </p>
                </div>
              </div>
            </div>

            <div class="review-box">
              <p class="customer-description">
                Our team has been working at frispes for almost 2 months because
                our office still closed. During working at frispes, we feel a
                new experience, we can feel working with a beautiful, modern,
                and comfortable space. And cozy cafe with high-speed internet in
                there. Thank you for frispes and team.
              </p>
              <div class="customer-info">
                <img src="images/Ellipse 2.png" alt="" />
                <div class="customer-detais">
                  <p class="customer-name">
                    Vesa <br />
                    Syla
                  </p>
                  <p class="customer-title">
                    UI Designer at <br />
                    ICK
                  </p>
                </div>
              </div>
            </div>

            <div class="review-box">
              <p class="customer-description">
                Our team has been working at frispes for almost 2 months because
                our office still closed. During working at frispes, we feel a
                new experience, we can feel working with a beautiful, modern,
                and comfortable space. And cozy cafe with high-speed internet in
                there. Thank you for frispes and team.
              </p>
              <div class="customer-info">
                <img src="images/Ellipse 2.png" alt="" />
                <div class="customer-detais">
                  <p class="customer-name">
                    Durajet <br />
                    Ibishi
                  </p>
                  <p class="customer-title">
                    UI Designer at <br />
                    Kutia
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Customer reviews End-->

      <!-- FAQ-->

      <div class="faq-section">
        <div class="container">
          <h2 class="title">
            Find the answers to anything <br />
            you need in our Help Center
          </h2>

          <div class="faq-boxes">
            <div class="faq-box">
              <p><a href="#" style="color: black;">How do I know if a space is available?</a></p>
              <i class="fa fa-angle-down"></i>
            </div>

            <div class="faq-box">
              <p><a href="#" style="color: black;">How to order online an product?</a></p>
              <i class="fa fa-angle-down"></i>
            </div>

            <div class="faq-box">
              <p><a href="#" style="color: black;">How to make available an apple TV?</a></p>
              <i class="fa fa-angle-down"></i>
            </div>
          </div>

          <a href="#" class="more">
            More questions &nbsp; &nbsp; <i class="fa fa-angle-right"></i
          ></a>
        </div>
      </div>

      <!-- FAQ end-->

      <!-- News insights-->
      <div class="news-insights-section">
        <div class="container">
          <div class="top-news">
            <h2 class="title">Apple Watch</h2>
            <a href="#" class="more">
              See more &nbsp; &nbsp; <i class="fa fa-angle-right"></i
            ></a>
          </div>

          <div class="news-container">
            <div class="news1">
              <div class="news1-image"></div>

              <div class="news1-info">
                <h4>Apple Watch iOS 2020 new update</h4>
                <p>
                  Out of concern for the health and safety of our developers,
                  employees, and local communities — and in line with recent ...
                </p>
                <div class="news1-detais">
                  <img src="img/watch7.jpg" alt="" width="100px" />
                  <div>
                    <p class="news1-name">Water resistant</p>
                    <p class="news1-title">50 meters</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="news2">
              <img src="img/watch22.jpg" alt="" />

              <div>
                <h4></h4>
                <p> </p>
              </div>
            </div>

            <div class="news3">
              <img src="img/watch11.png" alt="" />

              <div>
                <h4>Shop early to get all your gifts in time for the holidays</h4>
                <p> Apple Watch Series</p>
              </div>
            </div>
            <div class="news4">
              <img src="img/watch12.png" alt="" />

              <div>
                <h4>Shop early to get all your gifts in time for the holidays</h4>
                <p> Apple Watch Series</p>
              </div>
            </div>
            <div class="news5">
              <img src="img/watch15.png" alt="" />

              <div>
                <h4>Shop early to get all your gifts in time for the holidays</h4>
                <p>Apple Watch Series</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- News insights end-->

    <!-- Became member-->

    <div class="became-member">
      <div class="container">
        <div class="member-boxes">
          <div class="member-box">
            <div class="top-title">
              <p> Apple Music</p>
              <div class="middle-line"></div>
            </div>
            <h2 class="title">
              Magic like you’ve <br />
              never heard.
            </h2>
            <p>
              The music you love. <br />
              On the go.
            </p>
            <div>
              <a href="#" class="member-button">BUY NOW</a>
            </div>
          </div>

          <div class="member-box">
            <img
              src="images/portrait-photo-of-smiling-man-with-his-arms-crossed-standing-2379004 1.png"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>

    <!-- Became member end-->

    <!-- Footer-->
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

    <!-- Footer end-->
    <!-- THE JAVASCRIPT link-->
    <script type="text/javascript" src="jscript.js">
      
    </script>
    
  </body>
</html>
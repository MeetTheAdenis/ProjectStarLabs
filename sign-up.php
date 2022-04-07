<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        <!--
            ENDSSSS
        -->
        <!-- Nav Bar End -->
            <!-- Our Space Section -->
            <section class="section-padding">
              <div class="login-container">
                   <div class="wrapper-row">
                       <div class="login-form login-box">
                           <h2 class="form-title">Create Your Account</h2>

                           <form action="sign-up.php" method="post">
                               <div class="form-group">
                                   <input id="firstName" type="text" name="name" placeholder="Name" class="input-control" >
                               </div>
   
                               <div class="form-group">
                                   <input id="lastName" type="text" name="surname" placeholder="Surname" class="input-control" >
                               </div>
                                
                               <div class="form-group">
                                   <input id="email" name="email" type="text" placeholder="Email" class="input-control" >
                               </div>
                               <div class="form-group">
                                   <input id="username" name="username" type="text" placeholder="Username" class="input-control" >
                               </div>
                               <div class="form-group">
                                   <input id="password" name="password" type="password" placeholder="Password" class="input-control" >
                               </div>
                                 <!-- GENDER HERE  
                               <div class="form-group">
                                <label for="email">Gender</label>
                                    <div>
                                      <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male">Male</label>
                                      <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="female">Female</label>
                                      <label for="others" class="radio-inline"><input type="radio" name="gender" value="o" id="others">Others</label>
                                    </div>
                               </div> -->
                               <!--- Already an acc?-->
                               <button type="submit" name="registerBtn" class="btn-form" value="register">Sign Up</button>
                               <!-- te dergon te file ku kerkohet te mbushen fushat -->
                               <?php include_once 'controller/registerController.php' ?>
                               <p class="text-bottom">Already have ann account ? <a href="login.php">Log In</a></p>
                                
                               
                           </form>
                       </div>
                   </div>
              </div>
              
          </section>


       <!--Footer Start -->
        
        
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
  
      <script src="sign-up-validimi.js">
          
      </script>
      
    </body>
  </html>
<?php
  session_start();
  if (isset($_SESSION['ID'])) {
      header("Location:dashboard.php");
      exit();
  }
  // Include database connectivity
    
  include_once('config.php');
  
  if (isset($_POST['btnLogin'])) {
      $errorMsg = "";
      $username = $con->real_escape_string($_POST['username']);
      $password = $con->real_escape_string($_POST['password']);
      
  if (!empty($username) || !empty($password)) {
        $query  = "SELECT * FROM user WHERE username = '$username'";
        $result = $con->query($query);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $_SESSION['ID'] = $row['id'];
            $_SESSION['ROLE'] = $row['role'];
            $_SESSION['NAME'] = $row['name'];
           
            if($_SESSION['ROLE'] == 'admin') {
              header("Location:dashboard.php");
            } else {
              header("Location:index.php");
            }
            die();                              
        }else{
          $errorMsg = "No user found on this username";
        } 
    }else{
      $errorMsg = "Username and Password is required";
    }
  }
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
            <a href="login.php" class="button">Log In</a>
            <a href="sign-up.php" class="button">Sign Up</a>
          </div>
        </div>
        <!--
            ENDSSSS
        -->

        <!-- Our Space Section -->
        <section class="section-padding">
          <div class="login-container">
               <div class="wrapper-row">
                   <div class="login-form login-box">
                       <h2 class="form-title">Log In to Your Account</h2>

                       <!-- HERE IS FORM WITH REQUIRMENTS LOGIN -->
                       <?php if (isset($errorMsg)) { ?>
                        <div class="alert alert-danger alert-dismissible" style="text-align: center; margin-bottom: 20px; color: red">
                          <?php echo $errorMsg; ?>
                        </div>
                      <?php } ?>
                       <form method="POST" action="" name="loginForm" onsubmit="return validateForm()">
                           <div class="form-group">
                               <input type="text" placeholder="Your Username" name="username" class="input-control">
                           </div>
                           <div class="form-group">
                               <input type="password" placeholder="Your Password" name="password" class="input-control">
                           </div>
                           <button type="submit" class="btn-form btnLogin" name="btnLogin">Log in</button>
                           <p class="text-bottom">Don't have an account ? <a href="sign-up.php">Sign Up</a></p>
                        
                       </form>

                   </div>
               </div>
          </div>
      </section>
  
      <!-- Our Space Section End -->


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
  
      
      <script src="./loginFormValidation.js"></script>
    </body>
  </html>
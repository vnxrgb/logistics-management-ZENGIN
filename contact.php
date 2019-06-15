
<?php
session_start();
include 'util/users.php';
$login = 0;
if(isset($_SESSION['username'])){
  $login = 1;
  $username = $_SESSION['username']; 
  $user_details = fetchUserDetails($username);
  if(!$user_details['email_is_verified']){
    header('Location: verify_email.php');
  }
}
?>

<!DOCTYPE HTML>
<html >
<head>
  <meta charset="utf-8">

  <title>ZLPL|Contact Us</title>
  <meta name="e-notes" content="">
  <meta name="author" content="Abc,def,ghi">
  <meta name="google-signin-client_id" content="884000251920-jsnc6o4o8buh4ek1s208avhj3p5atm07.apps.googleusercontent.com">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="./stylesheets/contactuspage.css">




  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  <style>


</style>

</head>

<body><!--change start -->


    <nav>
      <div class="company-info-container">

        <div class="help-menu">
          <div>&nbsp;<span>24 * 7 Help desk<span>&nbsp;</div>
          <div>&nbsp;|&nbsp;</div>
          <div>&nbsp;<span>faq<span>&nbsp;</div>
          <div>&nbsp;|&nbsp;</div>
          <div>&nbsp;<span>english<span>&nbsp;</div>

        </div>
          <div class="company-logo"></div>
      </div>
        <ul>
            <li ><a href="home.php" >Home</a></li>
            <li ><a href="about.php">About Us</a>

            <ul>
                <li>
                  <span>Overview</span>
                  <h4><a href="#">Who we are ?</a></h4>
                  <h4><a href="#">What we are ?</a></h4>
                  <h4><a href="#">Why Zengin ?</a></h4>

                </li>
                <li>
                  <span>Vision &#38; Mission</span>
                  <h4><a href="#">Our vision</a></h4>
                  <h4><a href="#">Our mission</a></h4>

                </li>
                <li>
                  <span>Board of Directors</span>

                </li>
                <li>
                  <span>Management Team</span>

                </li>
                <li>
                  <span>Our Journey</span>

                </li>
                <li class="no-border">
                  <span>Zengin Kendra Network</span>

                </li>
            </ul>
            </li>
            <li ><a href="service.php">Our services</a></li>
           
            <li class="active"><a href="contact.php">contact us</a></li>
              <?php if(!$login){?>
            <li><a href="login.php">Login</a></li>
            <?php }else{ ?>
            <li><a href="util/logout.php">Logout</a></li>
            <?php } ?>
            <li class="search-container"><input type="text" placeholder="SEARCH"></input></li>
<?php if($login){ ?>
<h1>Welcome, <?=$username?>!</h1>
<?php  } ?>
      
            
        </ul>
    </nav>


  <div class="main-section ">
    <div class="module left">
      <i class="ion-ios-location" aria-hidden="true"></i>
      <h2>Contact:</h2>
      <li>
        <span class="bold">Corporate Office</span><br>
        B-7, Hind Suarashtra Industries<br>
        Co-op society Ltd. And-<br>
        heri-Kurla road, Near Marol<br>
        Metro Station, Marol, Andheri<br>
        East, Mumbai 400059<br>
      </li>
      <li>
        <span class="bold">Registered Office</span><br>
        Zengin House, 66, Marol<br>
        Co-op Industrial Estate, Off.<br>
        M.V. Road, Marol, Andheri<br>
        east Mumbai 400059<br>
      </li>
      <br>
      <li>
        <span class="bold">Customer Care:</span><br>
        1800 200 001<br>
        1800 200 002<br>
      </li>

    </div>
    <div class="module right">
      <iframe frameborder="0" style="border:0" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1886.3103866301165!2d72.8197537712091!3d18.99234832782936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce8930c0139f%3A0x2a95a91ca0316624!2sZengin+Kendra!5e0!3m2!1sen!2sin!4v1499246702627" >
        </iframe>
    </div>
    <div class="module feedback">
      <h2>FEEDBACK</h2>
      <input type="text" placeholder="Name"></input>
      <input type="text" placeholder="Company Name"></input>
      <input type="text" placeholder="Address"></input>
      <input type="text" placeholder="Contact Number"></input>
      <input type="text" placeholder="Email Address"></input>
      <input type="text" placeholder="Courier Booking/ Delivery Services"></input>
      <input type="text" placeholder="Queries:"></input>
      <div class="button-input-submit">SUBMIT</div>
        <div class="partner-logo-container">
          <div>OR WRITE US AT <br>
          info@Zengin.in
        </div>
        </div>
    </div>
  </div>

  <footer>
    <div class="footer-container">
      <div class="footer-top">
        <div class="company-info-container">

            <div class="help-menu">
              <div>&nbsp;<span>info@Zengin.in<span>&nbsp;</div>
              <div>&nbsp;|&nbsp;</div>
              <div>&nbsp;<span>1800 200 001<span>&nbsp;</div>
            </div>
            <div class="company-logo"></div>
        </div>
      </div>
      <div class="footer-middle">
        <div class="footer-module footer-newsletter">
          <h3>Subscribe to our Newsletter</h3>
          <input type="text" placeholder="Enter your email address"></input>
          <div class="button-input-submit">&#62;</div>
          <li>Browse online support</li>
          <li>24x7 Customer Helpline</li>
          <li>Customer Feedback</li>

        </div>
        <div class="footer-module footer-about-us">
          <h3>About Us</h3>
          <li>Overview</li>
          <li>Vision &amp; Mission</li>
          <li>Management Team</li>
          <li>Our Journey</li>
          <li>Zengin Kendra Network</li>
        </div>
        <div class="footer-module footer-services">
          <h3>Services</h3>
          <li>Overview</li>
          <li>Last Mile Delivery</li>
          <li>Courier booking Platform</li>
          <li>Reverse Pickup Solution</li>
        </div>
        <div class="footer-module footer-company">
          <h3>Company</h3>
          <li>About ZLPL</li>
          <li>Careers</li>
          <li>Conditions of Carriage</li>
          <li>International Holiday Schedule</li>

        </div>
        <div class="footer-module footer-mashup">
          <input class="search" type="text" placeholder="SEARCH"></input>
          <h3>Locate nearest <br> Zengin Kendra</h3>

          <i class="ion-ios-location location-icon" aria-hidden="true"></i>
          <input type="text" placeholder="Pincode / Areacode"></input>
                <div class="button-input-submit">&#62;</div>
          <div class="social-icon-container">
            <div class="socail-icon"><i class="ion-social-googleplus" aria-hidden="true"></i></div>
            <div class="socail-icon"><i class="ion-social-twitter" aria-hidden="true"></i></div>
            <div class="socail-icon"><i class="ion-social-youtube youtube-icon-fix" aria-hidden="true"></i></div>
            <div class="socail-icon"><i class="ion-social-linkedin" aria-hidden="true"></i></div>
            <div class="socail-icon"><i class="ion-social-facebook facebook-icon-fix" aria-hidden="true"></i></div>

            <a href="http://www.Zengin.in"><li>www.Zengin.in</li><a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">

            <div class="important-links">
              <div class="copyright-info">© Zengin Logistics Private Limited</div>
              <div>&nbsp;<span>Security &amp; Privacy<span>&nbsp;</div>
              <div>&nbsp;|&nbsp;</div>
              <div>&nbsp;<span>Terms &amp; Conditions<span>&nbsp;</div>
              <div>&nbsp;|&nbsp;</div>
              <div>&nbsp;<span>Site Map<span>&nbsp;</div>
              <div>&nbsp;|&nbsp;</div>
              <div>&nbsp;<span>Global home<span>&nbsp;</div>
            </div>
      </div>
    </div>
  </footer>


    <script src="http://localhost:35729/livereload.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--slider plugin-->
    <script src="./javascripts/slider.js"></script>


<script>



</script>
</body>
</html>

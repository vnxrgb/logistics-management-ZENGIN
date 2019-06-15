
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

  <title>ZLPL|Services Provided</title>
  <meta name="e-notes" content="">
  <meta name="author" content="Abc,def,ghi">
  <meta name="google-signin-client_id" content="884000251920-jsnc6o4o8buh4ek1s208avhj3p5atm07.apps.googleusercontent.com">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="./stylesheets/aboutus.css">




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
            <li class="active"><a href="about.php">About Us</a>

              <ul>
                <li>
                  <span>Overview</span>
                  <h4><a href="about.php">Who we are ?</a></h4>
                  <h4><a href="about.php">What we are ?</a></h4>
                  <h4><a href="about.php">Why Zengin ?</a></h4>

                </li>
                <li>
                  <span>Vision &#38; Mission</span>
                  <h4><a href="about.php">Our vision</a></h4>
                  <h4><a href="about.php">Our mission</a></h4>

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
            <li><a href="service.php">Our services</a></li>
      
            <li><a href="contact.php">contact us</a></li>
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


          <div class="module about-module-1">
            <li>
              <span class="active-1">Who are we ?</span><br>
              We are the largest last mile<br>
              logistics touch point<br>
              network.<br>
            </li>
            <div class="about-module-1-info">
              <p>
                Enabling you to reach your customers till the last mile. Zengin brings
                you a wide range of products offered by India’s best express service
                providers at your doorstep. Select the courier service addressing your
                specific requirements from a bouquet of services
              </p>
            </div>
          </div>
          <div class="module about-module-2">

            <div class="about-module-2-info">
              <p>
                Enabling you to reach your customers till the last mile. Zengin brings
                you a wide range of products offered by India’s best express service
                providers at your doorstep. Select the courier service addressing your
                specific requirements from a bouquet of service
              </p>
            </div>
            <li>
              <span class="active-1">What we do ?</span><br>
              We arethe largest last<br>
              mile logistics touch point<br>
              network.<br>
            </li>
          </div>
          <div class="module about-module-3">
            <div class="about-module-3-info"></div>
            <li class="right">
              <span class="title">OUR<br>VISION<br></span>
              <p>
                To be the largest, fully integrated Logistics Service Provider in<br>
                India that would provide technology driven, efficient and<br>
                reliable logistics services to unserved and underserved popu-<br>
                lation enabling them to send their documents/ parcels any-<br>
                where in the world at most competitive prices<br>
              </p>
            </li>
            <li class="left">
              <span class="title">OUR<br>MISSION<br></span>
              <p>
                To build the largest network of last mile pick-up and delivery points in India encompassing state of the art technology and best business practices<br>
                leveraging the availability of last mile infrastructure and integrating with top of the class logistics service providers.<br>
                To create a simple, reliable and cost-efficient logistics network with highest ethical and professional standards to be the most preferred logistics ser-<br>
                vice provider for the customer<br>
                To build a world class organization that would create value for the society, employees, customers, vendors and investor<br>
              </p>
            </li>

          </div>
          <div class="module1 about-module-4">
            <h1>BOARD OF DIRECTORS</h1>
            <div class="line"></div>
            <li>
              <div id="pic1" class="pic"></div>
              <div class="name">Dinesh Nandwana</div>
              <div class="post">Director</div>
              <div class="info">
                Mr. Dinesh Nandwana is one of the main
                promoters of the Zengin group, by
                profession, Mr. Nandwana is a Chartered
                Accountant. He is the navigator who
                drove the Zengin Limited from a
                modest consultancy company to a well
                renowned and prominent e-governance
                Company. His vast experience is backed
                by astute and dynamic leadership quali-
                ties. Mentoring the core management
                team and to carry the team to deliver the
                best in the class e-governance and IT &amp; IT
                enabled services has been his forte over
                the years.
              </div>
            </li>
            <li>
              <div id="pic1" class="pic"></div>
              <div class="name">Shailendra Jindal</div>
              <div class="post">managing director</div>
              <div class="info">
                An IT savvy Chartered Accountant with
                over 30 years of varied work experience in
                top leadership roles in various start-ups
                and large service organizations. Mr. Jindal
                has an excellent combination of finance
                and technology expertise combined with
                leadership skills and an ability to attract
                and retain talent. In his past roles, Mr.
                Jindal has designed and developed
                various world-class solutions including
                e-commerce, warehouse management
                solution and global documents tracking
                system in addition to global implementa-
                tion of SAP S/4 Hana for a leading Media
                Services company.
              </div>
            </li>
            <li>
              <div id="pic1" class="pic"></div>
              <div class="name">Jitendra Jog</div>
              <div class="post">Vice President, Operations</div>
              <div class="info">
                A veteran in the logistics industry, he is a
                result oriented professional with over 20
                years of wide and varied experience in
                the areas of Business Development,
                Operations Management, General
                Management and Client Servicing in this
                industry. He started his career with TNT
                Express in UK and has worked with leading
                logistics companies in India such as TNT
                India, Aramex India, Spoton, etc.
              </div>
            </li>
            <li>
              <div id="pic1" class="pic"></div>
              <div class="name">sanjay nandwana</div>
              <div class="post">xxxxx</div>
              <div class="info">
                Lorem ipsum dolor sit amet, consectetuer
                adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat. Ut wisi enim ad
                minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex
                ea commodo consequat. Duis autem vel
                eum iriure dolor in hendrerit in vulputate velit
                esse molestie consequat, vel illum dolore eu
                feugiat nulla facilisis at vero eros et
                accumsan et iusto odio dignissim qui blandit
              </div>
            </li>
            <li>
              <div id="pic1" class="pic"></div>
              <div class="name">chetan joshi</div>
              <div class="post">xxxxx</div>
              <div class="info">
                Lorem ipsum dolor sit amet, consectetuer
                adipiscing elit, sed diam nonummy nibh
                euismod tincidunt ut laoreet dolore magna
                aliquam erat volutpat. Ut wisi enim ad
                minim veniam, quis nostrud exerci tation
                ullamcorper suscipit lobortis nisl ut aliquip ex
                ea commodo consequat. Duis autem vel
                eum iriure dolor in hendrerit in vulputate velit
                esse molestie consequat, vel illum dolore eu
                feugiat nulla facilisis at vero eros et
                accumsan et iusto odio dignissim qui blandit
              </div>
            </li>
          </div>
          <div class="module1 about-module-5">
            <h1>MANAGEMENT TEAM</h1>
            <div class="line"></div>
            <li>
              <div id="pic1" class="pic"></div>
              <div class="info">
                Mr. Dinesh Nandwana is one of the main
                promoters of the Zengin group, by
                profession, Mr. Nandwana is a Chartered
                Accountant. He is the navigator who
                drove the Zengin Limited from a
                modest consultancy company to a well
                renowned and prominent e-governance
                Company. His vast experience is backed
                by astute and dynamic leadership quali-
                ties. Mentoring the core management
                team and to carry the team to deliver the
                best in the class e-governance and IT &amp; IT
                enabled services has been his forte over
                the years.
              </div>
              <div class="name-container">
                <div class="name">SHAILENDRA JINDAL</div>
                <div class="post">MANAGING DIRECTOR</div>
              </div>
            </li>
            <li>
              <div id="pic1" class="pic"></div>
              <div class="info">
                Mr. Dinesh Nandwana is one of the main
                promoters of the Zengin group, by
                profession, Mr. Nandwana is a Chartered
                Accountant. He is the navigator who
                drove the Zengin Limited from a
                modest consultancy company to a well
                renowned and prominent e-governance
                Company. His vast experience is backed
                by astute and dynamic leadership quali-
                ties. Mentoring the core management
                team and to carry the team to deliver the
                best in the class e-governance and IT &amp; IT
                enabled services has been his forte over
                the years.
              </div>
              <div class="name-container">
                <div class="name">Jitendra Jog</div>
                <div class="post">vp, operations</div>
              </div>
            </li>
            <li>
              <div id="pic1" class="pic"></div>
              <div class="info">
                Mr. Dinesh Nandwana is one of the main
                promoters of the Zengin group, by
                profession, Mr. Nandwana is a Chartered
                Accountant. He is the navigator who
                drove the Zengin Limited from a
                modest consultancy company to a well
                renowned and prominent e-governance
                Company. His vast experience is backed
                by astute and dynamic leadership quali-
                ties. Mentoring the core management
                team and to carry the team to deliver the
                best in the class e-governance and IT &amp; IT
                enabled services has been his forte over
                the years.
              </div>
              <div class="name-container">
                <div class="name">ATANU BHAUMIK</div>
                <div class="post">gm it</div>
              </div>
            </li>



          </div>
          <div class="module1 about-module-6">
            <h1>OUR JOURNEY</h1>
            <div class="line"></div>
              <li>
                <div id="march16" class="active-2  date">
                  <h3>MARCH</h3>
                  <h4>2016<h4>
                </div>
                <div class="date-log">
                  <p>Incorporated as Zengin Logistics Private Limited (ZLPL) in Mumbai</p>
                </div>
              </li>
              <li>
                <div id="may16" class="  date">
                  <h3>MAY</h3>
                  <h4>2016<h4>
                </div>
                <div class="date-log">
                  <p>Agreement with Delhivery Private Limited: delivered 1st last mile delivery shipment</p>
                </div>
              </li>
              <li>
                <div id="june16" class="  date">
                  <h3>June</h3>
                  <h4>2016<h4>
                </div>
                <div class="date-log">
                  <p>Agreement with Aramex India for courier booking and last mile delivery</p>
                </div>
              </li>
              <li>
                <div id="oct16" class="  date">
                  <h3>OCT</h3>
                  <h4>2016<h4>
                </div>
                <div class="date-log">
                  <p>Agreement with FedEx India: Delivered 25,000 shipment in a single month</p>
                </div>
              </li>
              <li>
                <div id="apr17" class="  date">
                  <h3>Apr</h3>
                  <h4>2017<h4>
                </div>
                <div class="date-log">
                  <p>Delivered 200,000th shipment, booked 4,000 couriers</p>
                </div>
              </li>


              <div class="timeline">
                <div id="circlemarch16" class="active-1 circle">
                  <i class="ion-android-radio-button-off" aria-hidden="true"></i>
                </div>
                <div class="line1"></div>
                <div id="circlemay16" class="circle">
                  <i class="ion-android-radio-button-off" aria-hidden="true"></i>
              </div>
                <div class="line1"></div>
                <div id="circlejune16" class="circle">
                  <i class="ion-android-radio-button-off" aria-hidden="true"></i>
              </div>
                <div class="line1"></div>
                <div id="circleoct16" class="circle">
                  <i class="ion-android-radio-button-off" aria-hidden="true"></i>
              </div>
                <div class="line1"></div>
                <div id="circleapr16" class="circle">
                  <i class="ion-android-radio-button-off" aria-hidden="true"></i>
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

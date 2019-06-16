<?php
session_start();
include 'util/users.php';
$login = 0;
$admin = 0;
if(isset($_SESSION['username'])){
  $login = 1;
  if(isset($_SESSION['admin'])){
      $admin = 1;
  }
  $username = $_SESSION['username']; 
  if(!isset($_SESSION['admin'])){
      header("Location: home.php");
  }
  $users = getAllUsers();
}
?>
<!DOCTYPE HTML>
<html >
<head>
  <meta charset="utf-8">

  <title>ZLPL|Homepage</title>
  <meta name="e-notes" content="">
  <meta name="author" content="Abc,def,ghi">
  <link href="https://unpkg.com/ionicons@4.5.9-1/dist/css/ionicons.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./stylesheets/vlpllandingpage.css">




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
            <li><a href="index.php" >Home</a></li>
            <li><a href="about.php">About Us</a>

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
            <li><a href="service.php">Our services</a></li>
            <li><a href="contact.php">contact us</a></li>
            <?php if($admin){ ?>
            <li class="active"><a href="admin.php">Admin Panel</a></li>
<?php }?>
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
  <div class="module_manage">
      <h2>Registered Users</h2>
      <table style="text-align:center;" class="table table-light">
  <thead class="thead-dark white-text">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Email Verified Status</th>
      <th scope="col">Manage</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=0; foreach($users as $user){ $i++; ?>
        <tr>
      <th scope="row"><?=$i?></th>
      <td><?=$user['username']?></td>
      <td><?=$user['email']?></td>
      <td><?=$user['age']?></td>
      <td style="">
      <?php if($user['email_is_verified']){ ?>
      <i style="color:green;" class="icon ion-md-checkbox">  Verified</i>
     <?php }else{ ?>
        <i style="color:red;" class="icon ion-md-close-circle">  Not Verified</i>
     <?php } ?>
      </td>
      <td>
      <a href="edit_users.php?user_id=<?=$user['username']?>" class="btn btn-success btn-sm">Edit</a>
      <div onclick="deleteUser('<?=$user['username']?>')" class="btn btn-danger btn-sm">Delete</div>

      </td>

    </tr>
    <?php } ?>
  </tbody>
</table>



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
function deleteUser(id){
  if(confirm("Are you sure?")){
    $.ajax({
      url: "util/ajax_delete_users.php",
      type:"POST",
      data:{
        'username':id,
      },
      cache: false,
      success: function(html){
          if(html=='success'){
            alert('User deleted!');
            window.location = ''
          }else{
            alert("error!");
            window.location = ''
          }
        }
      });
  }
  
}


</script>
</body>
</html>

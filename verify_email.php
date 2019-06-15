<?php

session_start(); 
include 'util/users.php';
if(!isset($_SESSION['username'])){
    header('Location: home.php');
}else{
    $username = $_SESSION['username'];
    $user_details = fetchUserDetails($username);
    if($user_details['email_is_verified']){
        header('Location: home.php');
    }
}



?>
<!DOCTYPE HTML>
<html >
<head>
  <meta charset="utf-8">

  <title>VLPL|Verify Email</title>
  <meta name="e-notes" content="">
  <meta name="author" content="Abc,def,ghi">
  <meta name="google-signin-client_id" content="884000251920-jsnc6o4o8buh4ek1s208avhj3p5atm07.apps.googleusercontent.com">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="./stylesheets/verifyemail.css">




  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  <style>


</style>

</head>

<body><!--change start -->




  <div class="main-section ">
    <form action="util/code_check.php" method="post" onsubmit="return validate();">
      <div class="login-form">
        <h1>EMAIL VERIFICATION</h1>
        <h3>Hey, <?=$username?>!</h3>
        <h3>Please check an email we sent over to, <?=$user_details['email']?>!</h3>
        <h2>Enter the code here :</h2>
        <input id="code" name="code" type="text" >
        <input type="text" name="username" value="<?=$username?>" style="display:none">
        <div class="button-input-submit"><button type="submit" style="background:none;color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;">VERIFY</button></div>
      </div>
</form?
  </div>



    <script src="http://localhost:35729/livereload.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--slider plugin-->
    <script src="./javascripts/slider.js"></script>


<script>
  function validate(){
    code = $('#code').val();
   
    if(code == ''){
      alert('Please enter the code!');
      return false;
    }
    return true;
  }



</script>
</body>
</html>

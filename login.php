<?php

session_start(); 

if(isset($_SESSION['username'])){
  header('Location: home.php');
}


?>
<!DOCTYPE HTML>
<html >
<head>
  <meta charset="utf-8">

  <title>VLPL|Login Page</title>
  <meta name="e-notes" content="">
  <meta name="author" content="Abc,def,ghi">
  <meta name="google-signin-client_id" content="884000251920-jsnc6o4o8buh4ek1s208avhj3p5atm07.apps.googleusercontent.com">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="./stylesheets/loginpage.css">




  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  <style>


</style>

</head>

<body><!--change start -->




  <div class="main-section ">
    <form action="util/login_submit.php" method="post" onsubmit="return validate();">
      <div class="login-form">
        <h1>USER LOGIN</h1>
        <h2>Username :</h2>
        <input id="username" name="username" type="text" ></input>
        <h2>Password :</h2>
        <input id="password" name="password" type="password" ></input>
        
        <div class="button-input-submit"><button type="submit" style="background:none;color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
  outline: inherit;">Login</button></div>
   
   <div class="button-input-submit2"><a href="signup.php" style="background:none;color: inherit;
	border: none;
	padding: 0;
	font: inherit;
  cursor: pointer;
  text-decoration:none;
  outline: inherit;">Not a user? Sign Up</a></div>
  <br>
  <br>
  
      </div>
</form>

  </div>



    <script src="http://localhost:35729/livereload.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--slider plugin-->
    <script src="./javascripts/slider.js"></script>


<script>
  function validate(){
    username = $('#username').val();
    password = $('#password').val();
    if(username == '' || password == ''){
      alert(username);
      return false;
    }
    return true;
  }



</script>
</body>
</html>

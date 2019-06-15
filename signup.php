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

  <title>VLPL|Sign Up Page</title>
  <meta name="e-notes" content="">
  <meta name="author" content="Abc,def,ghi">
  <meta name="google-signin-client_id" content="884000251920-jsnc6o4o8buh4ek1s208avhj3p5atm07.apps.googleusercontent.com">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="./stylesheets/signuppage.css">




  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
  <style>


</style>

</head>

<body><!--change start -->




  <div class="main-section ">

      <div class="login-form">
        <form method="post" action="util/signup_submit.php" onsubmit="return signup_validation();">
        <h1>USER LOGIN</h1>
        <h2>Username :</h2>
        <input name="username" id="username" type="text" >
        <h2>Email :</h2>
        <input name="email" id="email" type="text" >
        <h2>Age :</h2>
        <input name="age" id="age" type="text" >
        <h2>Password :</h2>
        <input name="password" id="password" type="password" >
        <h2>Confirm Password :</h2>
        
        <input id="password_confirm" type="password">
        
        <div style="margin-top:50px;" class="button-input-submit"><button type="submit" style="background:none;color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
    outline: inherit;">Sign Up</button></div>
    <div style="margin-top:50px;" class="button-input-submit2"><a  href="login.php" type="submit" style="background:none;color: inherit;
	border: none;
    padding: 0;
    text-decoration:none;
	font: inherit;
	cursor: pointer;
	outline: inherit;">Already a user? Login</a></div>
        </form>
      </div>

  </div>



    <script src="http://localhost:35729/livereload.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!--slider plugin-->
    <script src="./javascripts/slider.js"></script>


<script>

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function signup_validation(){
    username = $('#username').val();
    email = $('#email').val();
    password = $('#password').val();
    age = $('#age').val();
    password_confirm = $('#password_confirm').val();
    if(username == '' || email == '' || age == '' || password == '' || password_confirm == '' ){
    alert('Please fill all the fields!');
        return false
    }

    if(password != password_confirm){
        alert('Confirm password does not match!')
        return false;
    }

    if(password.length < 5){
        alert('Password should be more than 5 characters!');
        return false;
    }

    if(!parseInt(age)>0){
        alert('Invalid age!');
        return false;
    }

    if(!validateEmail(email)){
        alert('Invalid Email!');
    }
    
    return true;
}


</script>
</body>
</html>

<?php 

session_start();
include 'conn.php';
include 'mail.php';
$data = $_POST;
$username = $data['username'];
$age = $data['age'];
$password = sha1($data['password']);
$email = $data['email'];
$code = md5(uniqid($username, true));
$mail->AddAddress($email);
$mail->Body='Hi there! <br> Thank you for using our services! <br> Enter this code on the verify email screen <br> <h3>Here is your code</h3> <h1>'.$code.'</h1>';
$sql = "INSERT INTO user_details(username,email,age) VALUES ('$username','$email','$age')";
$sql2 = "INSERT INTO login(username,password) VALUES ('$username','$password')";
$sql3 = "INSERT INTO verification_codes(username,code_generated) VALUES ('$username','$code')";
if($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE){
    if($conn->query($sql3) === TRUE){
        if($mail->Send()){
            $_SESSION['username'] = $username;
            header('Location: ../verify_email.php');
        }
    }    
}else{
    echo '<script>alert("'.$conn->error.'");window.location="../signup.php"</script>';
    
}
?>
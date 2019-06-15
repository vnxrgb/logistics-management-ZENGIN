<?php 

session_start();
include 'conn.php';

$data = $_POST;
$username = $data['username'];
$code = $data['code'];


$sql = "SELECT * FROM verification_codes WHERE username='$username' AND code_generated='$code'";
$res = $conn->query($sql);
if($res->num_rows>0){
    $dataf = $res->fetch_assoc();
    $_SESSION['username'] = $dataf['username'];
    $sql2 = "UPDATE user_details SET email_is_verified='1' WHERE username='$username'";
    if($conn->query($sql2)){
        header('Location: ../home.php');
    }
}else{
    echo '<script>alert("Invalid code!");window.location="../verify_email.php"</script>';
    
}
?>


<?php 

session_start();
include 'conn.php';

$data = $_POST;
$username = $data['username'];

$password = sha1($data['password']);


$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$res = $conn->query($sql);
if($res->num_rows>0){
    $dataf = $res->fetch_assoc();
    if($dataf['is_admin']){
        $_SESSION['admin'] = 1;
    }
    $_SESSION['username'] = $dataf['username'];
    header('Location: ../home.php');
}else{
    echo '<script>alert("Invalid username/password combination!");window.location="../login.php"</script>';
    
}
?>
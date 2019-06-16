<?php 
include 'conn.php';
$data = $_POST;
//print_r($data);
$id = $data['id'];
$username = $data['username'];
$email = $data['email'];
$age = $data['age'];
$sql = "UPDATE user_details SET username='$username', email='$email', age='$age' WHERE id='$id'";
if($conn->query($sql)){
    echo 'success';
}else{
    echo 'error';
}

?>
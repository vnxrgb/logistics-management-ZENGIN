<?php 
include 'conn.php';
$data = $_POST;
//print_r($data);
$username = $data['username'];

$sql = "DELETE FROM user_details WHERE username='$username'";
$sql2 = "DELETE FROM login WHERE username='$username'";
if($conn->query($sql)){
    if($conn->query($sql2)){
        echo 'success';
    }
}else{
    echo 'error';
}

?>
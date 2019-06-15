<?php 

function fetchUserDetails($user){
    include 'conn.php';
    $sql = "SELECT * FROM user_details WHERE username='$user'";
    $res = $conn->query($sql);
    
    if($res){
        return $res->fetch_assoc();
    }
}

?>

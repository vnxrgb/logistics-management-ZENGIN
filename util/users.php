<?php 

function fetchUserDetails($user){
    include 'conn.php';
    $sql = "SELECT * FROM user_details WHERE username='$user'";
    $res = $conn->query($sql);
    
    if($res){
        return $res->fetch_assoc();
    }
}

function getAllUsers(){
    include 'conn.php';
    $sql = "SELECT * FROM user_details WHERE username!='admin'";
    $res = $conn->query($sql);
    $data = array();
    while($row=$res->fetch_assoc()){
        array_push($data,$row);
    }
    return $data;
}

?>

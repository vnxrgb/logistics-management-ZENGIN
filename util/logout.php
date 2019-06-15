<?php 

session_start();
session_destroy();
echo 'Successfully logged out!';
header( "refresh:1;url=../login.php" );


?>
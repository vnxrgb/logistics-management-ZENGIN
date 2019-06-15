<?php    

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail -> isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host= 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username='zlplservice1@gmail.com';
$mail->Password='!((*test';
$mail->SetFrom('noreply@zlpl.com');
$mail->Subject = 'Email Confirmation';



?>
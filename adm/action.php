<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$correo = $_SESSION['correo'];
$reporte = $_POST['reporte'];
$texto="";
if ($reporte == 1) {
    $texto = "RED";
}elseif ($reporte ==2) {
    $texto = "Otro";
}elseif ($reporte ==3) {
    $texto = "Proyector";
}elseif ($reporte ==4) {
    $texto = "Correo";
}elseif ($reporte ==5) {
    $texto = "Multifuncional";
}elseif ($reporte ==6) {
    $texto = "Adobe Profesional";
}elseif ($reporte ==7) {
    $texto = "Impresora";
}elseif ($reporte ==8) {
    $texto = "Internet";
}elseif ($reporte ==9) {
    $texto = "Windows (S.O)";
}elseif ($reporte ==10) {
    $texto = "Software";
}elseif ($reporte ==11) {
    $texto = "Office";
}elseif ($reporte ==12) {
    $texto = "Hardware";
}elseif ($reporte ==13) {
    $texto = "Teléfono";
}elseif ($reporte ==14) {
    $texto = "WFWEB";
}elseif ($reporte ==15) {
    $texto = "PHRONESYS";
}elseif ($reporte ==16) {
    $texto = "VPN";
}elseif ($reporte ==17) {
    $texto = "Red Inalámbrica";
}elseif ($reporte ==18) {
    $texto = "Checador";
}elseif ($reporte ==19) {
    $texto = "Tablet";
}elseif ($reporte ==20) {
    $texto = "Tóner de Impresora";
}elseif ($reporte ==21) {
    $texto = "Aire Acondicionado";
}elseif ($reporte ==22) {
    $texto = "Respaldo";
}elseif ($reporte ==23) {
    $texto = "Celular";
}elseif ($reporte ==24) {
    $texto = "Site";
}elseif ($reporte ==27) {
    $texto = "Préstamo Laptop";
}
$descripcion = $_POST['descripcion'];
$usuario = $_SESSION['nombre'];
$mail = new PHPMailer(true);
    
try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.office365.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sistemas@factualservices.com';                     // SMTP username
    $mail->Password   = 'FS2020fs';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('sistemas@factualservices.com', 'Sistemas');
    $mail->addAddress($correo);     

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '¿Quién Reportó?:'." ".$usuario;
    $mail->Body = 'Quien reportó: '.$usuario.'<br/>'.'Tipo de Reporte: '.$texto.'<br/>'.'Descripción del reporte: '.$descripcion ;
    //$mail->Body    = 'Descripcion del reporte: ' .$reporte;
   

    $mail->send();
 
} catch (Exception $e) {
    echo "Error al enviar mensaje {$mail->ErrorInfo}";
}
?>

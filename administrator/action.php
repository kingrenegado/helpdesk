<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$correo = $_POST['correo'];
$reporte = $_POST['reporte'];
$usuario = "Help Desk Sistemas FS";
$reporte = $_POST['reporte'];
$solucion = $_POST['solucion'];
$mail = new PHPMailer(true);
    
try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.office365.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sistemas@factualservices.com';                     // SMTP username
    $mail->Password   = 'Tsun4m10';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('sistemas@factualservices.com', 'Help Desk Sistemas FS');
    $mail->addAddress($correo);     

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Tiene una solucion a su reporte por parte de: '." ".$usuario;
    $mail->Body = '<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">'.'Descripción del reporte: '.$reporte.'<br/>'.'<br/>'.'<label style="color:red;"><i class="fas fa-exclamation-circle"></i> No se olvide de confirmar en Help Desk</label>' ;
    //$mail->Body    = 'Descripcion del reporte: ' .$reporte;
   

    $mail->send();
    //echo 'Mensaje enviado correctamente';
} catch (Exception $e) {
    echo "Error al enviar mensaje {$mail->ErrorInfo}";
}
?>

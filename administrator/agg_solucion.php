<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include '../php/conexion.php';
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$id = $_POST['id'];
$descripcion = $_POST['solucion'];
$nombre = $_POST['soluciono'];
$invertido = $_POST['tiempo'];
$correo = $_POST['correo'];
$reporte = $_POST['reporte'];

$result= mysqli_query($con,"INSERT INTO msolucion (solucion,id_mreporte,soluciono,tiempoinver) VALUES('$descripcion','$id','$nombre','$invertido') ");


echo $result;

 if ($result==true) {
   include 'action.php';
  $update = mysqli_query($con,"UPDATE mreporte set status=3 where id_reporte='$id' ");
                     echo '<script type="text/javascript">
        alert("solucion enviada exitosamente......");
      window.location.href="lista_reportes_soluc.php";
        </script>';
                   
                }else{
                 echo '<script type="text/javascript">
        alert("No se creo reporte......");
        
        </script>';
          echo $result;
       echo mysqli_error($con);
                }
?>
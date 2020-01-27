<?php 
include '../php/conexion.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include '../php/conexion.php';
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$reporte = $_POST['reporte'];

$result= mysqli_query($con,"INSERT INTO soluciontemporal (soluciontemp,id_mreporte) VALUES('$descripcion','$id') ");


echo $result;

 if ($result==true) {
  include 'action1.php';
  $update = mysqli_query($con,"UPDATE mreporte set status=2 where id_reporte='$id' ");
                     echo '<script type="text/javascript">
                    
        alert("solucion enviada exitosamente......");
      window.location.href="lista_reportes_soluc_temp.php";
        </script>';
                   
                }else{
                 echo '<script type="text/javascript">
        alert("No se creo reporte......");
        
        </script>';
          echo $result;
       echo mysqli_error($con);
                }
?>
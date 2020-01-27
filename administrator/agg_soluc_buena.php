<?php 
include '../php/conexion.php';
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$nombre = $_POST['soluciono'];
$invertido = $_POST['tiempo'];
$correo = $_POST['correo'];
$result= mysqli_query($con,"INSERT INTO msolucion (solucion,id_mreporte,soluciono,tiempoinver) VALUES('$descripcion','$id','$nombre','$invertido') ");


echo $result;

 if ($result==true) {
   include 'action2.php';
  $update = mysqli_query($con,"UPDATE mreporte set status=3 where id_reporte='$id' ");
  $delete = mysqli_query($con,"DELETE from soluciontemporal where soluciontemporal.id_mreporte = '$id' ");
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
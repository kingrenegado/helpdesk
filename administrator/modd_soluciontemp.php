<?php 
include '../php/conexion.php';
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$FecHr = date('Y/m/d H:i');

$result = mysqli_query($con,"UPDATE soluciontemporal set soluciontemp='$descripcion',fechahora=NOW()  where id_mreporte = '$id' ");

if ($result==true) {
  include 'action1.php';
   echo '<script type="text/javascript">
        alert("Agrego solucion temporal exitosamente......");
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
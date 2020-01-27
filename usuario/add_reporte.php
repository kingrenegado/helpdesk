 <?php
 session_start();
include '../php/conexion.php';

    $reporte = $_POST['reporte'];
    $descripcion = $_POST['descripcion'];
    $usuario = $_POST['usuario'];


            $result = mysqli_query($con,"INSERT into mreporte (idcreporte,descripcion,idusuario) values ('$reporte','$descripcion','$usuario')");
            echo $result;

                if ($result==true) {
                  include 'action.php';
                     echo '<script type="text/javascript">
        alert("Reporte guardado......");
        window.location.href="lista_reportes.php";
        </script>';
                   
                }else{
                 echo '<script type="text/javascript">
        alert("No se creo reporte......");
        
        </script>';
          echo $result;
       echo mysqli_error($con);
                }
            
?>  
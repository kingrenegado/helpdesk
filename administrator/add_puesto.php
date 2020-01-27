<?php
include '../php/conexion.php';

    $puesto = $_POST['puesto'];

            $result = mysqli_query($con,"INSERT into cpuesto (puesto) values ('$puesto')");
            echo $result;

                if ($result==true) {
                     echo '<script type="text/javascript">
        alert("Puesto guardado exitosamente......");
        window.location.href="lista_area.php";
        </script>';
                   
                }else{
                 echo '<script type="text/javascript">
        alert("No se registró puesto......");
        
        </script>';
          echo $result;
       echo mysqli_error($con);
                }
            
?>  
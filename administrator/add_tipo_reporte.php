 <?php
include '../php/conexion.php';

    $tiporeporte = $_POST['tiporeporte'];

            $result = mysqli_query($con,"INSERT into creportes (reporte) values ('$tiporeporte')");
            echo $result;

                if ($result==true) {
                     echo '<script type="text/javascript">
        alert("Tipo de Reporte guardado......");
        window.location.href="agregar_tipo_reporte.php";
        </script>';
                   
                }else{
                 echo '<script type="text/javascript">
        alert("No se creo reporte......");
        
        </script>';
          echo $result;
       echo mysqli_error($con);
                }
            
?>  
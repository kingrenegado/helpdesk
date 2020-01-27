 <?php
include '../php/conexion.php';

    $area = $_POST['area'];

            $result = mysqli_query($con,"INSERT into carea (area) values ('$area')");
            echo $result;

                if ($result==true) {
                     echo '<script type="text/javascript">
        alert("Área guardada exitosamente......");
        window.location.href="lista_area.php";
        </script>';
                   
                }else{
                 echo '<script type="text/javascript">
        alert("No se registró área......");
        
        </script>';
          echo $result;
       echo mysqli_error($con);
                }
            
?>  
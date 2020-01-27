<?php 
include '../php/conexion.php';
$npassword = $_POST['password'];
$usuario = $_SESSION['idusuario'];
$sql = "UPDATE FROM musuario set password = '$npassword' where idusuario = '$usuario' ";

$query = mysqli_query($con,$sql);

$result = mysqli_fetch_array($query);

if ($result==1) {
	echo '<script>alert("Contraseña cambiada con éxito") </script>'
}else{
	echo '<script type="text/javascript">
        alert("No se actualizo contraseña......");
        
        </script>';
          echo $result;
       echo mysqli_error($con);
}
?>
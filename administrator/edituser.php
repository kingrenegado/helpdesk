<?php
session_start();
include '../php/conexion.php';

if (empty($_POST)) {
	
		if (!empty($_POST)) {
		        $alert='';
		        if(empty($_POST['nombre'])|| empty($_POST['nomusuario'])|| empty($_POST['password'])||empty($_POST['area'])||empty($_POST['puesto'])){
		           echo '<script type="text/javascript">
						    alert("Todos los campos son necesarios......");
						    window.location.href="editar_usuario.php";
						    </script>';
        }else{
        	$idusuario = $_POST['idusuario'];
        	$nombre = $_POST['nombre'];
        	$nomusuario = $_POST['nomusuario'];
        	$password = $_POST['password'];
        	$area = $_POST['area'];
        	$puesto = $_POST['puesto'];

        	 $query= mysqli_query($con,"SELECT * FROM musuario WHERE (nomusuario='$nomusuario' and idusuario !=$idusuario)");

        	 $result = mysqli_fetch_array($query);

        	 if ($result>0) {
        	 	echo '<script type="text/javascript">
						    alert("El nombre de usuario ya existe eliga otro porfavor......");
						    window.location.href="editar_usuario.php";
						    </script>';
        	 }else{
        	 		$query_update = mysqli_query($con,"UPDATE musuario SET nombre = '$nombre',nomusuario = '$nomusuario', password = '$password' ");
        	 }
        	 if ($query_update==true) {
        	 	echo '<script type="text/javascript">
						    alert("Usuario actualizado......");
						    window.location.href="editar_usuario.php";
						    </script>';
						    echo $result;
       echo mysqli_error($con);
        	 }else{
        	 		echo '<script type="text/javascript">
						    alert("No se pudo actualizar usuario......");
						    window.location.href="editar_usuario.php";
						    </script>';
						    echo $result;
       echo mysqli_error($con);
        	 }
        }

	
    }
}
?>
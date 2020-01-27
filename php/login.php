<?php
$alert="";
session_start();
if(!empty($_SESSION['active'])){
    header('location:../sistema/index.php');
}if (!empty($_POST)){
        if (empty($_POST['nomusuario'])||empty($_POST['password'])) {
          $alert="Ingrese su usuario y su clave";
        }else{
        	require_once "conexion.php";
			$user= mysqli_real_escape_string($con,$_POST['nomusuario']);
			$clave= mysqli_real_escape_string($con,$_POST['password']);

			$query = mysqli_query($con,"SELECT * FROM  musuario WHERE nomusuario='$user' and password='$clave' ");
		
			$result=mysqli_num_rows($query);

			if ($result==1) {
				$data = mysqli_fetch_array($query);
				$_SESSION['active'] = true;
				$_SESSION['idUser'] = $data['idusuario'];
				$_SESSION['nombre'] = $data['nombre'];
				$_SESSION['nomusuario'] = $data['nomusuario'];
				$_SESSION['id_carea'] = $data['id_carea'];
				$_SESSION['id_cpuesto'] = $data['id_cpuesto'];
				$_SESSION['id_cusuario'] = $data['id_cusuario'];

                header('location: ../sistema/index.php');
			}else{
                $alert= "El usuario o la clave son incorrectos";
                session_destroy();
            }

}
}
?>

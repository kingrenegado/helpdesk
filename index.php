<?php
$alert="";
session_start();
if (!empty($_POST)){
        if (empty($_POST['nomusuario'])||empty($_POST['password'])) {
          $alert="Ingrese su usuario y su clave";
        }else{
        	require_once "php/conexion.php";
			$user= mysqli_real_escape_string($con,$_POST['nomusuario']);
			$clave= mysqli_real_escape_string($con,$_POST['password']);

			$query = mysqli_query($con,"SELECT musuario.nombre,musuario.nomusuario,carea.area,cpuesto.puesto,cusuario.tipo,musuario.correo,musuario.id_cusuario FROM `musuario` INNER JOIN carea ON carea.id_carea= musuario.id_carea INNER JOIN cpuesto on cpuesto.id_cpuesto = musuario.id_cpuesto INNER JOIN cusuario on cusuario.id_cusuario = musuario.id_cusuario WHERE nomusuario='$user' and password='$clave' ");
		
			$result=mysqli_num_rows($query);

			if ($result==1) {
				$data = mysqli_fetch_array($query);
				$_SESSION['active'] = true;
				$_SESSION['idusuario'] = $data['idusuario'];
				$_SESSION['nombre'] = $data['nombre'];
				$_SESSION['nomusuario'] = $data['nomusuario'];
				$_SESSION['area'] = $data['area'];
				$_SESSION['puesto'] = $data['puesto'];
				$_SESSION['tipo'] = $data['tipo'];
				$_SESSION['id_cusuario'] = $data['id_cusuario'];
				$_SESSION['password'] = $data['password'];
				$_SESSION['correo']= $data['correo'];

				if ($data['id_cusuario']==1) {
					# code...
				
				//if ($data['nomusuario'] =="elara" || $data['nomusuario'] == 'jmartinez' || $data['nomusuario']=='fchiquini' || $data['nomusuario']== 'mheredia' || $data['nomusuario'] == 'jreyes' ) {
					header('location: administrator/index.php');
				}elseif ($data['id_cusuario']==3) {
					header('location: advanceduser/');
				}
				else if($data['id_cusuario']==2){
					header('location: usuario/index.php');
				}else if($data['id_cusuario']==4){
					header('location: admin/');
				}else if($data['id_cusuario']==5){
					header('location: adm/');
				}else if($data['id_cusuario']==6){
					header('location: admini/');
				}else if($data['id_cusuario']==7) {
					header('location: adminis');
				}

                
			}else{
                $alert= "El usuario o la clave son incorrectos";
                session_destroy();
            }

}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login HELP_DESKS FS</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div class="container">
		<div class="icon">
			
			<span class="encabezado">Help-Desk FS</span>
		</div>
		<div class="container-form">
			
			<form action="" method="post" name="formentra">
				<div class="input-group input-group-lg">
					
					<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
					<input type="text" name="nomusuario" class="form-control" placeholder="Nombre de Usuario" id="nomusuario" required>
				</div>
				<br>
				<div class="input-group input-group-lg">
					<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" name="password" class="form-control" placeholder="Contraseña" required>
				</div>
				<br>
				<button class="btn btn-lg btn-primary btn-block btn-signin" id="ingreso" type="Submit">Entrar</button>
				<div class="alert"><?php echo $alert?></div>
			</form>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
</html>
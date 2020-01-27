<?php
session_start();
include '../php/conexion.php';
include 'empty.php';

$nombre = $_SESSION['nombre'];
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>HELP_DESK</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <!-- All Plugin Css --> 
		<link rel="stylesheet" href="css/plugins.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		
		<!-- Style & Common Css --> 
		<link rel="stylesheet" href="css/common.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
			<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="icon" href="images/logo.ico" type="image/ico" />

    </head>
	
    <body>
	
		<!-- Navigation Start  -->
		<nav class="navbar navbar-default navbar-sticky bootsnav">

			<div class="container">      
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="index.php" style="cursor: pointer;font-size: 15pt; font-weight: bold;"> <img src="img/logo2.png" style="width: 165px; height:45px;" ></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
							<li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li> 
							<li><a href="lista_reportes.php"><i class="fas fa-list-ol"></i> Ver mis reportes</a></li>
							<li><a href="profile.php"><i class="fas fa-user-alt"></i> Perfil</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-users"></i> Usuarios </a>
								<ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
									<li class="active"><a href="lista_usuarios.php"><i class="fas fa-users"></i> Lista de Usuarios</a></li>
								</ul>
							</li> 
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['nombre'];?> </a>
								<ul class="dropdown-menu animated fadeOutUp" style="display: none; opacity: 1;">
									<li class="active"><a href="profile.php"><i class="fas fa-user-circle"></i> Perfil</a></li>
									<li><a href="salir.php"><i class="fas fa-sign-in-alt"></i> Cerrar Sesión</a></li>
								</ul>
							</li>
						</ul>
				</div><!-- /.navbar-collapse -->
			</div>   
		</nav>
		<!-- Navigation End  -->
		
		<!-- Main jumbotron for a primary marketing message or call to action -->
		<section class="main-banner" style="background:#242c36 url(img/slider-01.jpg) no-repeat">
			<div class="container">
				<div class="caption">
					<h2>Bienvenido a HELP_DESK</h2>
					
				</div>
			</div>
		</section>
		
		
<section class="profile-detail">
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<div class="basic-information">
						<div class="col-md-3 col-sm-3">
						 <img src="img/usuario.png" alt="" class="img-responsive">
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="profile-content">
									<h2>Perfil</h2>
									
									<ul class="information">
										<li><span>Nombre:</span><?php echo $_SESSION['nombre']?> </li>
										<li><span>Nombre de usuario:</span><?php echo $_SESSION['nomusuario']?></li>
										<li><span>Correo:</span><?php echo $_SESSION['correo']?></li>
										<li><span>Área:</span><?php echo $_SESSION['area']?></li>
										<li><span>Puesto:</span><?php echo $_SESSION['puesto']?></li>
									</ul>
								</div>
							</div>
						

					</div>
				</div>
			</div>
		</div>
	</section>


		
       
		<section class="counter">
			<div class="container">
				<div class="col-md-6 col-sm-3">
					<div class="counter-text">
						<span aria-hidden="true"><i class="fas fa-user-check"></i></span>
						<h3>Usuario</h3>
						<p> <?php 
                   echo $_SESSION['nombre'];
                ?> </p>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-3">
					<div class="counter-text">
						<span class="box1"><span aria-hidden="true"><i class="fas fa-share-square"></i></span></span>
						<h3>Reportes enviados</h3>
						<p><?php 
						$nombre = $_SESSION['nombre'];
                         $idusuario = $_SESSION['idusuario'];

             $sql= "SELECT creportes.reporte,mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,musuario.nombre,mreporte.status FROM mreporte INNER JOIN creportes on creportes.idcreporte = mreporte.idcreporte INNER JOIN musuario on musuario.idusuario = mreporte.idusuario where musuario.nombre= '$nombre' ORDER BY mreporte.id_reporte ASC";
						
                  $result=mysqli_query($con,$sql);
                   $campos=mysqli_num_rows($result);
                   echo $campos;
                   echo $idusuario;
                ?>  </p>
					</div>
				</div>
				
				
			</div>
		</section>
		
	
    
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="js/bootsnav.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>

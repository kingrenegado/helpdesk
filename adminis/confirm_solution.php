<?php
session_start();
include '../php/conexion.php';
include 'empty.php';
$idreporte = $_REQUEST['idreporte'];

$query_accept = mysqli_query($con,"UPDATE mreporte set status=0 where id_reporte=$idreporte ");


if ($query_accept) {
	echo '<script>alert("Tu respuesta fue exitosa");
	window.location.href="index.php";
	 </script>' ;
}else {
	'<script type="text/javascript">
        alert("No se pudo confirmar....");
        </script>';
           echo $query_accept;
       echo mysqli_error($con);
}

$idreporte = $_REQUEST['idreporte'];
$nombre = $_SESSION['nombre'];

$query=mysqli_query($con,"SELECT creportes.reporte,mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,musuario.nombre,mreporte.status,msolucion.solucion,msolucion.fechahora FROM mreporte INNER JOIN creportes on creportes.idcreporte = mreporte.idcreporte INNER JOIN musuario on musuario.idusuario = mreporte.idusuario INNER JOIN msolucion on msolucion.id_mreporte =mreporte.id_reporte  where musuario.nombre= '$nombre' and mreporte.status=3 ORDER BY mreporte.id_reporte ASC ");

$result = mysqli_num_rows($query);

if ($result>0) {
	while ($data=mysqli_fetch_array($query)) {
		$nombre = $data['nombre'];
		$reporte = $data['descripcion'];
		$tiporep = $data['reporte'];
		$fecha = $data['fecha_hora'];
		$solucion = $data['solucion'];
		$fecha_hora = $data['fechahora'];
	}
}
	

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
		<link rel="icon" href="images/logo.ico" type="image/ico" />
		<!-- Style & Common Css --> 
		<link rel="stylesheet" href="css/common.css">
		<link rel="stylesheet" type="text/css" href="css/custom.css">
        <link rel="stylesheet" href="css/main.css">

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
		<br/>
		<br/>
		
		
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
		
	
		<!-- Navigation End  -->
		
		<!-- Main jumbotron for a primary marketing message or call to action -->
		<section class="main-banner" style="background:#242c36 url(img/slider-01.jpg) no-repeat">
			<div class="container">
				<div class="caption">
					<h2>Bienvenido a HELP_DESK</h2>
					
				</div>
			</div>
		</section>
		<br/>
		<br/>
		

		<center>
               <h1 style="color: blue"><i class="fas fa-list-ol"></i>  Su reporte fue atendido</h1>
       <input type="hidden" name="idreporte" value="<?php echo $idreporte;?>">
           <p>Nombre: <span><?php echo $nombre;?></span></p>
            <p>Descripción del reporte: <span><?php echo $reporte.$tiporep?></span>  </p>
            <p>Fecha y hora en la que se dió el reporte: <span><?php echo $fecha;?></span></p>
              <p>Solucion que se le dió al reporte: <span><?php echo $solucion;?></span></p>
               <p>Fecha de la solucion: <span><?php echo $fecha_hora;?></span></p>
               <form method="post" action="">
        
                       <input type="hidden" name="idreporte" value="<?php echo $idreporte;?>">
                <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i>Sí</button>
            </form>
            </center>


			<section class="main-banner" style="background:#242c36 url(img/slider-01.jpg) no-repeat">
			<div class="container">
				<div class="caption">
					<h2>Bienvenido a HELP_DESK</h2>
					
				</div>
			</div>
		</section>
		
		<section class="features">
			<a href="lista_reportes.php">
			<div class="container">
				<div class="col-md-3 col-sm-4">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true"><i class="fas fa-list-ol"></i></span></span>
						<h3>Lista de Reportes</h3>
						<p>En este apartado usted como usuario podra ver los reportes hecha por usted.</p>
					</div>
						</a>
				</div>
				
				<div class="col-md-3 col-sm-4">
					<a href="profile.php">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true"><i class="fas fa-exchange-alt"></i></span></span>
						<h3>Visitar perfil</h3>
						<p>Puede consultar sus datos</p>
					</div>
				</a>
				</div>
				<div class="col-md-3 col-sm-4">
					<a href="lista_reportes_soluc.php">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true"><i class="fas fa-book-reader"></i></span></span>
						<h3>Usted tiene:</h3>
						<?php 
						$nombre = $_SESSION['nombre'];
						$idusuario = $_SESSION['idusuario'];
						$query = mysqli_query($con,"SELECT creportes.reporte,mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,musuario.nombre,mreporte.status,msolucion.solucion,msolucion.fechahora FROM mreporte INNER JOIN creportes on creportes.idcreporte = mreporte.idcreporte INNER JOIN musuario on musuario.idusuario = mreporte.idusuario INNER JOIN msolucion on msolucion.id_mreporte =mreporte.id_reporte  where musuario.nombre= '$nombre' and mreporte.status=3 ORDER BY mreporte.id_reporte ASC ");
						$camp = mysqli_num_rows($query);
						echo $camp;
						?>
						<p>Reporte(s) esperando su confirmación</p>
					</div>
				</a>
				</div>
				
				<div class="col-md-4 col-sm-4">
					<a href="salir.php">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true"><i class="fas fa-power-off"></i></span></span>
						<h3>Cerrar Sesión</h3>
						<p>Presione este botón si quiere cerrar sesión, los reportes que haya hecho serán guardados.</p>
					</div>
					</a>
				</div>
				
				
		</section>
		

			<!-- footer start -->
		
		 
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="js/bootsnav.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>

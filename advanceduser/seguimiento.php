<?php
session_start();
include '../php/conexion.php';
include 'empty.php';

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
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toogle="dropdown"><i class="fas fa-list-ol"></i> Reportes</a>
							<ul class="dropdown-menu animated fadeOutUp" style="display: none;opacity: 1;">
								<li class="active"> <a href="lista_reportes.php"><i class="fas fa-clipboard-list"></i> Lista de Reportes</a></li>
							</ul>
							</li>
							<li><a href="profile.php"><i class="fas fa-user-alt"></i> Perfil</a></li> 
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
				<div class="col-md-3 col-sm-4">
					<a href="salir.php">
					<div class="features-content">
						<span class="box1"><span aria-hidden="true"><i class="fas fa-power-off"></i></span></span>
						<h3>Cerrar Sesión</h3>
						<p>Presione este botón si quiere cerrar sesión, los reportes que haya hecho serán guardados.</p>
					</div>
					</a>
				</div>
				
				
		</section>
		
	   <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2> <i class="fas fa-book-open"></i> Administrar <b>Reportes</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#addreporteModal" class="btn btn-success" data-toggle="modal"><i class="fas fa-search-plus"></i> <span>Agregar Reporte</span></a>
          </div>
                </div>
            </div>
		
	 <div class='col-sm-4 pull-right'>
           </div>
      </div>
      <div class='clearfix'></div>
      <hr>
      <div id="loader"></div><!-- Carga de datos ajax aqui -->
      <div id="resultados"></div><!-- Carga de datos ajax aqui -->
      <div class='outer_div'></div><!-- Carga de datos ajax aqui -->

 <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         <th>#Reporte</th>
                          <th>Descripción del Reporte</th>
                          <th>Fecha del Reporte</th>
                          <th>Solucion Temporal</th>
                         <th>Fecha y Hora sol. Temp.</th>
                         <th>¿Quien Reportó?</th>
                        </tr>
                         <?php
                         $nombre = $_SESSION['nombre'];
                         $idusuario = $_SESSION['idusuario'];

              $query=mysqli_query($con,"SELECT musuario.nombre,musuario.idusuario, mreporte.id_reporte, soluciontemporal.idsoluciontemp,mreporte.descripcion,mreporte.fecha_hora,soluciontemporal.fechahora,soluciontemporal.soluciontemp FROM soluciontemporal INNER JOIN mreporte on mreporte.id_reporte = soluciontemporal.id_mreporte
              INNER JOIN musuario on musuario.idusuario = mreporte.idusuario where musuario.nombre = '$nombre'  ORDER BY fechahora ASC ");

              $result = mysqli_num_rows($query);

              if ($result > 0) {
              while($data = mysqli_fetch_array($query)){
              	 	$campo_largo = $data['descripcion']; 
              	$campo_largo1 = $data['soluciontemp']; 
              	$status ="";

              	
              ?>
                      </thead>

                      <tbody>
                        <tr>
                          <th><?php echo $data['id_reporte'];?></th>
                            <td><?php echo str_replace("\n", "<br>", $campo_largo);?></td>
                          <td><?php echo $data['fecha_hora'];?></td>
                             <td><?php echo str_replace("\n", "<br>", $campo_largo1);?></td>
                          <td><?php echo $data['fechahora'];?></td>
                          <td><?php echo $data['nombre'];?>;</td>
                          </td>
                         </tr>
                      </tbody>
                       <?php

}

}
        ?>
                    </table>
    <?php 
include "modal_add_reporte.php";
?>

		<!-- footer start -->
		
		 
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script src="js/bootsnav.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>

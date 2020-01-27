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
               <link rel="stylesheet" href="css/style.css">

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
		
		
		
	
	   <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2 style="color: #FFF"> <i class="fas fa-book-open"></i> Administrar <b>Reportes</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#addreporteModal" class="btn btn-success" data-toggle="modal"><i class="fas fa-search-plus"></i> <span>Agregar Reporte</span></a>
          </div>
                </div>
            </div>
		
	 <div class='col-sm-4 pull-right'>
        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <form action="buscar_reporte.php" method="get" class="form_search">
                <input type="text" name="busqueda" id="busqueda" class="form_search" placeholder="Buscar">
                <button type="submit" class="btn_search"><i class="fas fa-search" style=""></i> </button>
            </form>
                               
                            </div>
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
                          <th># Reporte</th>
                          <th>Reporte</th>
                          <th>Descrición</th>
                          <th>Fecha y Hora</th>
                          <th>¿Quién Reportó?</th>
                          
                        </tr>
                                     <?php

    $busqueda= strtolower($_REQUEST['busqueda']);//recibir datos strolower convierte a minusculas todo
    if (empty($busqueda)) {
        header('Location: lista_reportes.php');
    }
        ?>  
                         <?php
                         $nombre = $_SESSION['nombre'];
                         $idusuario = $_SESSION['idusuario'];

              $query=mysqli_query($con,"SELECT creportes.reporte,mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,musuario.nombre,mreporte.status FROM mreporte INNER JOIN creportes on creportes.idcreporte = mreporte.idcreporte INNER JOIN musuario on musuario.idusuario = mreporte.idusuario where musuario.nombre= '$nombre' and descripcion LIKE '%$busqueda%'  and reporte LIKE '%$busqueda%'ORDER BY mreporte.id_reporte ASC ");

              $result = mysqli_num_rows($query);

              if ($result > 0) {
              while($data = mysqli_fetch_array($query)){
                 $campo_largo = $data['descripcion'];
              ?>
                      </thead>

                      <tbody>
                        <tr>
                          <td><?php echo $data['id_reporte'];?></td>
                          <td><?php echo $data['reporte'];?></td>
                         <td><?php echo str_replace("\n", "<br>", $campo_largo);?></td>
                          <td><?php echo $data['fecha_hora'];?></td>
                          <td><?php echo $data['nombre'];?></td>
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

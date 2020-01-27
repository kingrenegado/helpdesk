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
    
  
     <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2 style="color: #FFF"> <i class="fas fa-users"></i> Administrar <b>Usuarios</b></h2>
          </div>
          <div class="col-sm-6">
            <a href="#addUsserModal" class="btn btn-success" data-toggle="modal"><i class="fas fa-user-plus"></i> <span>Agregar Usuario</span></a>
          </div>
                </div>
            </div>
    
   <div class='col-sm-4 pull-right'>
        <div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <form action="buscar_usuario.php" method="get" class="form_search">
                <input type="text" name="busqueda" id="busqueda" class="form_search" placeholder="Buscar">
                <button type="submit" class="btn_search"><i class="fas fa-search"></i> </button>
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
                          <th>Nombre Completo</th>
                          <th>Nombre usuario</th>
                          <th>Área</th>
                          <th>Puesto</th>
                          <th>Acciones</th>
                        </tr>
                         <?php
                         $nombre = $_SESSION['nombre'];
                         $idusuario = $_SESSION['idusuario'];

   $busqueda= strtolower($_REQUEST['busqueda']);//recibir datos strolower convierte a minusculas todo
    if (empty($busqueda)) {
        header('Location: lista_usuarios.php');
    }
        ?>  
      <?php
              $query=mysqli_query($con,"SELECT cusuario.id_cusuario, musuario.idusuario,musuario.nombre,musuario.nomusuario,musuario.password,carea.area,cpuesto.puesto FROM musuario INNER JOIN carea ON carea.id_carea = musuario.id_carea INNER JOIN cpuesto ON cpuesto.id_cpuesto = musuario.id_cpuesto INNER JOIN cusuario on cusuario.id_cusuario = musuario.id_cusuario  WHERE
                                                                (nombre LIKE '%$busqueda%' OR
                                                                nomusuario LIKE '%$busqueda%' OR
                                                                puesto LIKE '%$busqueda%' OR
                                                                area LIKE '%$busqueda%'
                                                                )
                                                                ORDER BY musuario.nombre ASC");

              $result = mysqli_num_rows($query);

              if ($result > 0) {
              while($data = mysqli_fetch_array($query)){
              ?>
                      </thead>

                      <tbody>
                        <tr>
                          <td><?php echo $data['nombre'];?></td>
                          <td><?php echo $data['nomusuario'];?></td>
                          <td><?php echo $data['area'];?></td>
                          <td><?php echo $data['puesto'];?></td>
                         
                          <td>
                            <center>
                              <?php if($data["id_cusuario"]!=1)  {
                    
                    ?>  

                        <a class="link_delete" href="editar_usuario.php?id=<?php echo $data["idusuario"];?>"> <i class="fas fa-user-edit" style="color: yellow"></i> </a>

                        <a class="link_delete" href="eliminar_confirmar_usuario.php?id=<?php echo $data["idusuario"];?>"> <i class="far fa-trash-alt" style="color: red"></i> </a>
                       <?php } ?>
                          </center>
                          </tr>
                      </tbody>
                       <?php

}
}

        ?>
                    </table>
    <?php 
include "modal_add.php";
?>

    <!-- footer start -->
    
     
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/bootsnav.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>

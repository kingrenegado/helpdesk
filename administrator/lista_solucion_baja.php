<?php
session_start();
include '../php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/custom.css">
 <link rel="icon" href="images/logo.ico" type="image/ico" />
    <title>Lista de Reportes (<?php 
     $sql="SELECT * FROM mreporte";
     $result=mysqli_query($con,$sql);
      $campos=mysqli_num_rows($result);
       $sql1="SELECT * FROM msolucion";
     $result1=mysqli_query($con,$sql1);
      $campos1=mysqli_num_rows($result1);
     //echo $campos;
    // echo "<br/>".$campos1;
     //echo "<br/> operacion = ($campos1*100)/$campos";
     $operacion = $campos-$campos1;
     //echo "<br/>".$operacion;
    echo $operacion;

    ?>) </title>

    <!-- Bootstrap -->
  <?php include 'includes/script.php';?>
  </head>

  <?php include 'includes/script.php' ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fas fa-building"></i> HELP_DESK<span></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
           <?php include 'includes/menu.php';?>

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
            
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="salir.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.jpg" alt=""><?php echo $_SESSION['nombre']?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"><i class="fa fa-user"></i> Perfil</a></li>
                    <li><a href="salir.php"><i class="fas fa-power-off"></i> Cerrar Sesión</a></li>
                  </ul>
                </li>

                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="right_col" role="main">
          <!-- top tiles -->
           <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Lista de Usuarios</span>
              <div class="count">
                <?php 
                  $sql="SELECT * FROM musuario";
                  $result=mysqli_query($con,$sql);
                   $campos=mysqli_num_rows($result);
                   echo $campos;
                ?> 
              </div>
              <span class="count_bottom"><i class="green">Usuarios </i> Registrados</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fas fa-sticky-note"></i> Reportes enviados</span>
              <div class="count">
                <?php 
                  $sql="SELECT * FROM mreporte";
                  $result=mysqli_query($con,$sql);
                   $campos=mysqli_num_rows($result);
                   echo $campos;
                ?> 
              </div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>Reportes  </i> Enviados</span>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Soluciones</span>
              <div class="count green"><?php 
                  $sql="SELECT * FROM msolucion";
                  $result=mysqli_query($con,$sql);
                   $campos=mysqli_num_rows($result);
                   echo $campos;
                ?> </div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> Reportes</i> Solucionados</span>
            </div>
       
         
          <div class="col-md-3 col-sm-7 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Porcentaje de reportes solucionados</span>
              <div class="count green"><?php 
              $total="";
                 $sql="SELECT * FROM mreporte";
                  $result=mysqli_query($con,$sql);
                   $campos=mysqli_num_rows($result);
                    $sql1="SELECT * FROM msolucion";
                  $result1=mysqli_query($con,$sql1);
                   $campos1=mysqli_num_rows($result1);
                  //echo $campos;
                 // echo "<br/>".$campos1;
                  //echo "<br/> operacion = ($campos1*100)/$campos";
                  $operacion = $campos1*100;
                  //echo "<br/>".$operacion;
                 
                  if ($campos==0||$campos1==0) {
                    $total="0%";
                    echo $total;
                  }else {
                     $nop = $operacion/$campos;
                  echo round($nop,2);
                  }
                ?> </div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> Porcentaje</i>  de Trabajo</span>
            </div>

 <div class="col-md-3 col-sm-7 col-xs-6 tile_stats_count">
              <span class="count_top" style="color: red"><i class="fas fa-times"></i> Reportes sin solución</span>
              <div class="count red"><?php 
                 $sql="SELECT * FROM mreporte";
                  $result=mysqli_query($con,$sql);
                   $campos=mysqli_num_rows($result);
                    $sql1="SELECT * FROM msolucion";
                  $result1=mysqli_query($con,$sql1);
                   $campos1=mysqli_num_rows($result1);
                  //echo $campos;
                 // echo "<br/>".$campos1;
                  //echo "<br/> operacion = ($campos1*100)/$campos";
                  $operacion = $campos-$campos1;
                  //echo "<br/>".$operacion;
                 echo $operacion;
                ?> </div>
              <span class="count_bottom" style="color: red"><i class="red"><i class="fa fa-sort-asc"></i> Reporte </i>  sin solución</span>
            </div>
            <div class="col-md-5 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Reportes con espera de Confirmación</span>
              <div class="count">
                <?php 
                  $sql="SELECT * FROM coun";
                  $result=mysqli_query($con,$sql);
                   $campos=mysqli_num_rows($result);
                   echo $campos;
                ?> 
              </div>
 <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>Reportes  </i> en espera de Confirmación</span>
            </div>

            <!----
<div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Reporte por Área de Sistemas</span>
              <div class="count green"> <?php 
                  //$sql="SELECT musuario.id_carea,carea.id_carea,carea.area,creportes.reporte,mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,musuario.nombre,mreporte.status FROM mreporte INNER JOIN creportes on creportes.idcreporte = mreporte.idcreporte INNER JOIN musuario on musuario.idusuario = mreporte.idusuario INNER JOIN carea on carea.id_carea = musuario.id_carea where  carea.id_carea = 1 ORDER BY mreporte.id_reporte ASC";
                  //$result=mysqli_query($con,$sql);
                   //$campos=mysqli_num_rows($result);
                   //echo $campos;
                ?> </div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> Reportes</i> Área de Sistemas</span>
            </div>
   

   <div class="col-md-3 col-sm-3 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Reporte por Área de Distintivo H</span>
              <div class="count green"> <?php 
                  //$sql="SELECT musuario.id_carea,carea.id_carea,carea.area,creportes.reporte,mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,musuario.nombre,mreporte.status FROM mreporte INNER JOIN creportes on creportes.idcreporte = mreporte.idcreporte INNER JOIN musuario on musuario.idusuario = mreporte.idusuario INNER JOIN carea on carea.id_carea = musuario.id_carea where  carea.id_carea = 2 ORDER BY mreporte.id_reporte ASC";
                  //$result=mysqli_query($con,$sql);
                   //$campos=mysqli_num_rows($result);
                   //echo $campos;
                ?> </div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> Reportes</i> Área de Distintivo H</span>
            </div>

             <div class="col-md-5 col-sm-3 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Reporte por Área de Verificación de Información Comercial
</span>
              <div class="count green"> <?php 
                  //$sql="SELECT musuario.id_carea,carea.id_carea,carea.area,creportes.reporte,mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,musuario.nombre,mreporte.status FROM mreporte INNER JOIN creportes on creportes.idcreporte = mreporte.idcreporte INNER JOIN musuario on musuario.idusuario = mreporte.idusuario INNER JOIN carea on carea.id_carea = musuario.id_carea  where  carea.id_carea = 3 ORDER BY mreporte.id_reporte ASC";
                  //$result=mysqli_query($con,$sql);
                  // $campos=mysqli_num_rows($result);
                   //echo $campos;
                ?> </div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> Reportes</i> Área de Verificación de Información Comercial</span>
            </div>


             <div class="col-md-5 col-sm-3 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Reporte por Área de Control Sanitario
</span>
              <div class="count green"> <?php 
                  //$sql="SELECT musuario.id_carea,carea.id_carea,carea.area,creportes.reporte,mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,musuario.nombre,mreporte.status FROM mreporte INNER JOIN creportes on creportes.idcreporte = mreporte.idcreporte INNER JOIN musuario on musuario.idusuario = mreporte.idusuario INNER JOIN carea on carea.id_carea = musuario.id_carea  where  carea.id_carea = 4 ORDER BY mreporte.id_reporte ASC";
                  //$result=mysqli_query($con,$sql);
                  // $campos=mysqli_num_rows($result);
                   //echo $campos;
                ?> </div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> Reportes</i> Área de Control sanitario</span>
            </div>


             <div class="col-md-5 col-sm-3 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Reporte por Área de Producto Électrico Electrónico
</span>
              <div class="count green"> <?php 
                  //$sql="SELECT musuario.id_carea,carea.id_carea,carea.area,creportes.reporte,mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,musuario.nombre,mreporte.status FROM mreporte INNER JOIN creportes on creportes.idcreporte = mreporte.idcreporte INNER JOIN musuario on musuario.idusuario = mreporte.idusuario INNER JOIN carea on carea.id_carea = musuario.id_carea  where  carea.id_carea = 6 ORDER BY mreporte.id_reporte ASC";
                  //$result=mysqli_query($con,$sql);
                  // $campos=mysqli_num_rows($result);
                   //echo $campos;
                ?> </div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> Reportes</i> Área de Producto Électrico Electrónico</span>
            </div>

            --->
         
   </div>

  
          <!-- /top tiles -->

          <br />
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
            <h2><i class="fas fa-poll"></i> Administrar <b>Soluciones</b></h2>
          </div>
          
                </div>
            </div>
      <div class='col-sm-4 pull-right'>
        
      </div>
      <div class='clearfix'></div>
      <hr>
      <div id="loader"></div><!-- Carga de datos ajax aqui -->
      <div id="resultados"></div><!-- Carga de datos ajax aqui -->
      <div class='outer_div'></div><!-- Carga de datos ajax aqui -->
            
 <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Descripcion del Reporte</th>
                          <th>Fecha del Reporte</th>
                          <th>Descripcion Solucion</th>
                          <th>Fecha de la Solucion</th>
                          <th>Acciones</th>
                        </tr>
                         <?php
              $query=mysqli_query($con,"SELECT msolucion.id_msolucion,mreporte.descripcion,mreporte.fecha_hora,msolucion.solucion,msolucion.fechahora FROM msolucion INNER JOIN mreporte on mreporte.id_reporte = msolucion.id_mreporte where msolucion.status = 0 ORDER BY fechahora ASC");

              $result = mysqli_num_rows($query);

              if ($result > 0) {
              while($data = mysqli_fetch_array($query)){
              ?>
                      </thead>


                      <tbody>
                        <tr>
                          <td><?php echo $data['descripcion'];?></td>
                          <td><?php echo $data['fecha_hora'];?></td>
                          <td><?php echo $data['solucion'];?></td>
                          <td><?php echo $data['fecha_hora'];?></td>
                          <td>
                            <center>
                        <a class="link_delete" href="eliminar_confirmar_solucion.php?id=<?php echo $data["id_msolucion"];?>">| <i class="far fa-trash-alt" style="color: red"></i> </a>
                        
                          </center>
                          </td>
                        </tr>
                      </tbody>
                       <?php

}
}

        ?>
                    </table>
    
<?php include "modal_add_solucion.php"?>
                <footer>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
 <?php include 'includes/pie.php';?>
  
  </body>
</html>

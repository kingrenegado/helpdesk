<?php
/*
if (empty($_REQUEST['idreporte'])) {
  header('Location:lista_reportes.php');
  }

$idreporte = $_REQUEST['idreporte'];

//$query_reporte = mysqli_query($con,"SELECT  mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,soluciontemporal.soluciontemp,soluciontemporal.fechahora FROM soluciontemporal INNER JOIN mreporte on mreporte.id_reporte = soluciontemporal.id_mreporte WHERE soluciontemporal.id_mreporte = '$idreporte' ");
$query_reporte = mysqli_query($con,"SELECT mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,musuario.idusuario,musuario.nombre,musuario.correo FROm mreporte INNER JOIN musuario on musuario.idusuario = mreporte.idusuario where mreporte.status=1 and id_reporte='$idreporte'");

$result_reporte = mysqli_num_rows($query_reporte);


    if ($result_reporte ==0 ) {
      header('location: lista_reportes_soluc_temp.php');
    }else{
      while ($data=mysqli_fetch_array($query_reporte) ) {
        $idreporte = $data['id_reporte'];
        $reporte = $data['descripcion'];
        $fecha_reporte = $data['fechahora'];
        $soluciontemporal=$data['soluciontemp'];

      }
    }*/
session_start();
include '../php/conexion.php';

if (empty($_REQUEST['idreporte'])) {
  header('Location:lista_reportes_soluc_temp.php');
}

$idreporte = $_REQUEST['idreporte'];
     
$query_reporte = mysqli_query($con,"SELECT  mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,soluciontemporal.soluciontemp,soluciontemporal.fechahora,musuario.idusuario,musuario.nombre,musuario.correo FROM soluciontemporal INNER JOIN mreporte on mreporte.id_reporte = soluciontemporal.id_mreporte INNER JOIN musuario ON musuario.idusuario=mreporte.idusuario WHERE soluciontemporal.id_mreporte = '$idreporte' ");

$result_reporte = mysqli_num_rows($query_reporte);


if ($result_reporte==0) {
  header('location:lista_reportes_soluc_temp.php');
}
else {
  while ($data = mysqli_fetch_array($query_reporte)) {
    $idreporte = $data['id_reporte'];
    $reporte = $data['descripcion'];
    $fecha_reporte = $data['fecha_hora'];
    $soluciontemporal = $data['soluciontemp'];
    $nombre = $data['nombre'];
    $correo = $data['correo'];
  }
}
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
<link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="icon" href="images/logo.ico" type="image/ico" />
    <title>Añadir Solición  </title>

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

<div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="profile.php" class="user-profile dropdown-toggle" aria-expanded="false">
                    <img src="images/user.jpg" alt=""><?php echo $_SESSION['nombre']?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                 
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- top navigation -->
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
<div class="form-register">
        <h1><i class="far fa-building"></i>  Añadir Solución</h1>
    <div class="alert"><?php echo isset($alert) ? $alert:''; ?></div>

    <form action="agg_soluc_buena.php" method="post">
    <label for="quien">¿Quién Reportó?</label>
    <input type="text" name="nombre" id="nombre" value="<?php echo $nombre?>">
    <input type="hidden" name="correo" id="correo" value="<?php echo $correo?>">
      <input type="hidden" name="id" id="id" value="<?php echo $idreporte?>">
    <label for="reporte">Reporte: </label>
    <textarea name="reporte" readonly rows="4" cols="50" value="" style="width: 350px;border: 1px solid #85929e;border-radius: 5px; cursor: no-drop"><?php echo $reporte?></textarea>

    <label for="fecha">Fecha del Reporte: </label>
    <input type="text" name="fecha" readonly style=" cursor: no-drop" value="<?php echo $fecha_reporte ?>" >

    <label for="descripcion">Descripcion de la solucion</label>
    <textarea name="descripcion" rows="5" cols="50" style="width: 350px;border: 1px solid #85929e;border-radius: 5px;" ><?php echo $soluciontemporal?></textarea>
   <label for="soluciono">Quién soluciono el problema?</label>
     <?php
      $query = mysqli_query($con,"SELECT * FROM solucionado");
      $result = mysqli_num_rows($query);

    ?>
    <select name="soluciono" id="soluciono">
    <?php 
      if ($result>0 ) {
       while($solucion = mysqli_fetch_array($query)){ 
    ?>
        <option value="<?php echo $solucion['nombre']?>"  ><?php echo $solucion['nombre']?></option>

    <?php
        }
    }
    ?>
    </select>
    <label>Tiempo invertido:</label>
   <input type="text" name="tiempo" >
   <center>
      <a href="lista_reportes.php" class="btn btn-warning" style="text-align: center; margin-top: 20px;"><i class="fas fa-ban"></i> Cancelar</a>
      </center>
    <button type="submit" class="btn_save" ><i class="fas fa-key"></i> Cerrar Solución</button>
    </form>
        </div>

  </section>

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

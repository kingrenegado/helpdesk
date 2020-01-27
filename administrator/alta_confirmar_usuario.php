<?php
session_start();
include '../php/conexion.php';


if(!empty($_POST))
{

    if ($_POST['idusuario']==1 AND $_POST['idusuario']==2) {
       
        header("Location: lista_usuarios.php");
        exit;
    }


$id=$_POST['idusuario'];
$query_delete = mysqli_query($con,"UPDATE musuario SET status=1 WHERE idusuario=$id");

if ($query_delete) {
 echo '<script type="text/javascript">
        alert("Usuario Dado de alta");
        window.location.href="lista_usuarios.php";
        </script>';
}else{
  echo '<script type="text/javascript">
        alert("No se puede volver a dar de alta el Usuario....");
        
        
        </script>';
           echo $query_delete;
       echo mysqli_error($con);
}
}if (empty($_REQUEST['id'])||$_REQUEST['id']==1||$_REQUEST['id']==2) 
    {

    }else{
 
        $idusuario = $_REQUEST['id'];

        $query= mysqli_query($con,"SELECT musuario.nombre,cpuesto.puesto,carea.area FROM musuario INNER JOIN cpuesto ON cpuesto.id_cpuesto = musuario.id_cpuesto INNER JOIN carea on carea.id_carea = musuario.id_carea WHERE musuario.idusuario = '$idusuario' ");

        $result = mysqli_num_rows($query);

        if($result>0){
            while($data = mysqli_fetch_array($query)){
                $nombre = $data['nombre'];
                $puesto = $data['puesto'];
                $area = $data['area'];
            }
        }else{
            header("Location: lista_usuarios.php");
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
<link rel="stylesheet" type="text/css" href="css/custom.css">
 <link rel="icon" href="images/logo.ico" type="image/ico" />

    <title>Volver Usuario (<?php 
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

          <br />          <center>
               <h1 style="color: green"><i class="fas fa-user-check"></i>  Esta seguro de Volver a dar de alta el usuario</h1>
            <p>Nombre: <span><?php echo $nombre ?></span></p>
            <p>Puesto: <span><?php echo $puesto ?></span></p>
             <p>Area: <span><?php echo $area ?></span></p>

               <form method="post" action="">
                <input type="hidden" name="idusuario" value="<?php echo $idusuario;?>">
                <a href="lista_usuarios.php" class="btn btn-info"><i class="fas fa-ban"></i>Cancelar</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-user-check"></i> Dar de alta</button>
            </form>
            </center>

                  <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
 <?php include 'includes/pie.php';?>
  
  </body>
</html>

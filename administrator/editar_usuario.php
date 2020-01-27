<?php
session_start();
include '../php/conexion.php';

if (!empty($_POST)) {
  $alert = '';
  if (empty($_POST['nombre'])||empty($_POST['nomusuario'])||empty($_POST['password'])||empty($_POST['area'])||empty($_POST['puesto'])) {
    $alert='<p class="msg_error">Todos los campos son obligarotios</p>';
  }else{
    $idusuario = $_POST['idusuario'];
    $nombre = $_POST['nombre'];
    $nomusuario = $_POST['nomusuario'];
    $password = $_POST['password'];
    $area = $_POST['area'];
    $puesto = $_POST['puesto'];
     $query= mysqli_query($con,"SELECT * FROM musuario 
            WHERE (nomusuario='$nomusuario' and idusuario !=$idusuario) 
             ");
     $result = mysqli_fetch_array($query);

     if ($result>0) {
       $alert='<p class="msg_error">Correo o usuario ya existe</p>';
     }else{
      $sql_update = mysqli_query($con,"UPDATE musuario set nombre='$nombre',nomusuario='$nomusuario',password='$password',id_carea ='$area',id_cpuesto = '$puesto' where idusuario = '$idusuario'  ");
     }
     if ($sql_update==true) {
       $alert='<p class="msg_save">Usuario Actualizado exitosamente</p>';
     }else{
                    $alert='<p class="msg_error">Error al actualizar usuario </p>';
                    echo mysqli_error($con);
                }
  }
}

if (empty($_REQUEST['id'])) {
  header('Location: lista_usuarios.php');
}
$idusuario = $_REQUEST['id'];

$query_usuario = mysqli_query($con,"SELECT musuario.idusuario, musuario.nombre,musuario.nomusuario,musuario.password,carea.id_carea,carea.area,cpuesto.id_cpuesto,cpuesto.puesto FROM musuario INNER JOIN carea on carea.id_carea = musuario.id_carea INNER JOIN cpuesto on cpuesto.id_cpuesto = musuario.id_cpuesto WHERE musuario.idusuario = '$idusuario' ");
$result_usuario = mysqli_num_rows($query_usuario);
echo mysqli_error($con);
if ($result_usuario==0) {
  header('Location: lista_usuarios.php');
}else{
  while($data=mysqli_fetch_array($query_usuario)){
    $idusuario = $data['idusuario'];
    $nombre = $data['nombre'];
    $nomusuario = $data['nomusuario'];
    $password = $data['password'];
    $area = $data['area'];
     $puesto = $data['puesto'];
    $id_carea = $data['id_carea'];
    if ($id_carea==1 ) {
       $option = '<option value="'.$id_carea.'" select> '.$area.' </option>';
    }else if ($id_carea==2 ) {
       $option = '<option value="'.$id_carea.'" select> '.$area.' </option>';
    }elseif ($id_carea==3 ) {
       $option = '<option value="'.$id_carea.'" select> '.$area.' </option>';
    }elseif ($id_carea==4 ) {
       $option = '<option value="'.$id_carea.'" select> '.$area.' </option>';
    }elseif ($id_carea==6 ) {
       $option = '<option value="'.$id_carea.'" select> '.$area.' </option>';
    }elseif ($id_carea==7) {
       $option = '<option value="'.$id_carea.'" select> '.$area.' </option>';
    }elseif ($id_carea==8 ) {
       $option = '<option value="'.$id_carea.'" select> '.$area.' </option>';
    }elseif ($id_carea==9 ) {
       $option = '<option value="'.$id_carea.'" select> '.$area.' </option>';
    }elseif ($id_carea==10 ) {
       $option = '<option value="'.$id_carea.'" select> '.$area.' </option>';
    }elseif ($id_carea==11 ) {
       $option = '<option value="'.$id_carea.'" select> '.$area.' </option>';
    }elseif ($id_carea==12 ) {
       $option = '<option value="'.$id_carea.'" select> '.$area.' </option>';
    }
    $id_cpuesto = $data['id_cpuesto'];
     if ($id_cpuesto==1 ) {
       $opt = '<option value="'.$id_cpuesto.'" select> '.$puesto.' </option>';
    }else if ($id_cpuesto==2 ) {
       $opt = '<option value="'.$id_cpuesto.'" select> '.$puesto.' </option>';
    }elseif ($id_cpuesto==3 ) {
       $opt = '<option value="'.$id_cpuesto.'" select> '.$puesto.' </option>';
    }elseif ($id_cpuesto==4 ) {
       $opt = '<option value="'.$id_cpuesto.'" select> '.$puesto.' </option>';
    }elseif ($id_cpuesto==6 ) {
       $opt = '<option value="'.$id_cpuesto.'" select> '.$puesto.' </option>';
    }elseif ($id_cpuesto==7) {
       $opt = '<option value="'.$id_cpuesto.'" select> '.$puesto.' </option>';
    }elseif ($id_cpuesto==8 ) {
       $opt = '<option value="'.$id_cpuesto.'" select> '.$puesto.' </option>';
    }elseif ($id_cpuesto==9 ) {
       $opt = '<option value="'.$id_cpuesto.'" select> '.$puesto.' </option>';
    }elseif ($id_cpuesto==10 ) {
       $opt = '<option value="'.$id_cpuesto.'" select> '.$puesto.' </option>';
    }elseif ($id_cpuesto==11 ) {
       $opt = '<option value="'.$id_cpuesto.'" select> '.$puesto.' </option>';
    }elseif ($id_cpuesto==12 ) {
       $opt = '<option value="'.$id_cpuesto.'" select> '.$puesto.' </option>';
    }
   
    
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
    <title>Lista de Usuarios (<?php 
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
                  <a href="profile.php" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
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
 <div class="form-register">
        <h1><i class="fas fa-user-edit"></i>  Editar Usuario</h1>
    <div class="alert"><?php echo isset($alert) ? $alert:''; ?></div>

    <form action="" method="post">
      <input type="hidden" name="idusuario" id="idusuario" value="<?php echo $idusuario?>">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" value="<?php echo $nombre ?>">

    <label for="nomusuario">Nombre de usuario: </label>
    <input type="text" name="nomusuario"  value="<?php echo $nomusuario ?>" >

    <label for="password">Password: </label>
    <input type="text" name="password"  value="<?php echo $password ?>" >
  
    <label for="area">Área: </label>
 <?php 
 $query_area = mysqli_query($con,"SELECT id_carea,area FROM carea ");
 $result_area = mysqli_num_rows($query_area);
 ?>
 <select name="area" id="area" class="notItemOne">
    <?php 
      echo $option;
        if ($result_area > 0) {
            while($area = mysqli_fetch_array($query_area)){        
    ?>
        <option value="<?php echo $area['id_carea']?>"  ><?php echo $area['area']?></option>

    <?php
        }
    }
    ?>
    </select>
<label >Puesto</label>

    <?php

        $query_puesto=mysqli_query($con,"SELECT id_cpuesto,puesto FROM cpuesto order by puesto asc");

        $result_puesto = mysqli_num_rows($query_puesto);

    ?>
  <select name="puesto" id="puesto" class="notItemOne">
  
    <?php 
        echo $opt;
        if ($result_puesto > 0) {
            while($puesto = mysqli_fetch_array($query_puesto)){        
    ?>
        <option value="<?php echo $puesto['id_cpuesto']?> "><?php echo $puesto['puesto']?></option>
    <?php
        }
    }
    ?>
    </select>

       <a href="lista_usuarios.php" class="btn_cancel" style="width: 150px;height: 45px; text-align: center;"><i class="fas fa-ban"></i> Cancelar</a>
    <button type="submit" class="btn_save" ><i class="fas fa-user-edit"></i> Editar Usuario</button>
    </form>
        </div>
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

<?php
session_start();
include '../php/conexion.php';
include 'empty.php';

if (!empty($_POST)) {
  $alert = '';
  if (empty($_POST['nombre'])||empty($_POST['nomusuario'])||empty($_POST['area'])||empty($_POST['puesto'])) {
    $alert='<p class="msg_error">Todos los campos son obligarotios</p>';
  }else{
    $idusuario = $_POST['idusuario'];
    $nombre = $_POST['nombre'];
    $nomusuario = $_POST['nomusuario'];
    $area = $_POST['area'];
    $puesto = $_POST['puesto'];
     $query= mysqli_query($con,"SELECT * FROM musuario 
            WHERE (nomusuario='$nomusuario' and idusuario !=$idusuario) 
             ");
     $result = mysqli_fetch_array($query);

     if ($result>0) {
       $alert='<p class="msg_error">Correo o usuario ya existe</p>';
     }else{
      $sql_update = mysqli_query($con,"UPDATE musuario set nombre='$nombre',nomusuario='$nomusuario',id_carea ='$area',id_cpuesto = '$puesto' where idusuario = '$idusuario'  ");
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
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


     <div class="form-register">
        <h1><i class="fas fa-user-edit"></i>  Editar Usuario</h1>
    <div class="alert"><?php echo isset($alert) ? $alert:''; ?></div>

    <form action="" method="post">
      <input type="hidden" name="idusuario" id="idusuario" value="<?php echo $idusuario?>">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" value="<?php echo $nombre ?>">

    <label for="nomusuario">Nombre de usuario: </label>
    <input type="text" name="nomusuario"  value="<?php echo $nomusuario ?>" >
    
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

    
    <button type="submit" class="btn_save" ><i class="fas fa-user-edit"></i> Editar Usuario</button>
     <a href="lista_usuarios.php" class="btn_cancel" style="width: 150px;height: 45px; text-align: center;"><i class="fas fa-ban"></i> Cancelar</a>
    </form>
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
    
  
      <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/bootsnav.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>

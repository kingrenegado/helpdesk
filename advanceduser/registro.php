 <?php 
include '../php/conexion.php';
$nombre = $_POST['nombre'];
$nomusuario = $_POST['nomusuario'];
$password = $_POST['password'];
$area = $_POST['area'];
$puesto = $_POST['puesto'];
$correo = $_POST['correo'];


 $query= mysqli_query($con,"SELECT * FROM musuario WHERE  nomusuario='$nomusuario' ");

 $result = mysqli_fetch_array($query);

 if($result>0){
               echo '<script type="text/javascript">
        alert("El usuario ya esxiste");
        window.location.href="lista_usuarios.php";
        </script>';
            }else{
                $query_insert = mysqli_query($con,"INSERT INTO musuario(nombre,nomusuario,password,id_carea,id_cpuesto,status,correo)
                                                        VALUES ('$nombre','$nomusuario','$password','$area','$puesto',1,'$correo') ");
                
                if ($query_insert == true) {
                	 echo '<script type="text/javascript">
        alert("Usuario creado exitosamente,......");
        window.location.href="lista_usuarios.php";
        </script>';
                   
                }else{ echo '<script type="text/javascript">
        alert("Error al crear usuario");
        window.location.href="lista_usuarios.php";
        </script>';
                }
            }
       
        ?>    

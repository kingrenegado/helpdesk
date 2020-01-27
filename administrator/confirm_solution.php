<?php
session_start();
include '../php/conexion.php';

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

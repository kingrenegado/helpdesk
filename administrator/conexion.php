<?php
$host= 'localhost';
$user = 'root';
$password= '';
$db = 'reporte';

$con = @mysqli_connect($host,$user,$password,$db);
mysqli_set_charset($con, 'utf8');

 if (!$con) {
       echo "Error conexion";
    }

?>
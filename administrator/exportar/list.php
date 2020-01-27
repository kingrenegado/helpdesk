<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=lista_usuarios.xls');

	include '../conexion.php';
 $query=mysqli_query($con,"SELECT musuario.idusuario,musuario.nombre,musuario.nomusuario,musuario.password,carea.area,cpuesto.puesto FROM musuario INNER JOIN carea ON musuario.id_carea = carea.id_carea INNER JOIN cpuesto ON musuario.id_cpuesto = cpuesto.id_cpuesto ORDER BY musuario.nombre ASC");
              $result = mysqli_num_rows($query);
              mysqli_error($con);
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
<table border="1">
	<tr >
		<th>Nombre Completo</th>
                          <th>Nombre usuario</th>
                          <th>Password</th>
                          <th>Area</th>
                          <th>Puesto</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_array($query)) {
			?>
				<tr>
					<td><?php echo $row['nombre']; ?></td>
					<td><?php echo $row['nomusuario']; ?></td>
					<td><?php echo $row['password']; ?></td>
					<td><?php echo $row['area']; ?></td>
					<td><?php echo $row['puesto']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>
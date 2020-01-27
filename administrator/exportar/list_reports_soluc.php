<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=reportes_solucionados.xls');

	include '../conexion.php';
 $query=mysqli_query($con,"SELECT mreporte.id_reporte, msolucion.id_msolucion,mreporte.descripcion,mreporte.fecha_hora,msolucion.solucion,msolucion.fechahora,msolucion.soluciono,msolucion.tiempoinver,msolucion.status FROM msolucion INNER JOIN mreporte on mreporte.id_reporte = msolucion.id_mreporte where msolucion.status = 1 ORDER BY fechahora ASC");
              $result = mysqli_num_rows($query);
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
<table border="1">
	<tr >
		<th># Reporte</th>
                          <th>Reporte</th>
                          <th>Fecha Hora</th>
                          <th>Solucion</th>
                          <th>Fecha y Hora de la Solución</th>
                          <th>Quien Solucionó</th>
                          <th>Tiempo Invertido</th>
	</tr>
	<?php
		while ($data=mysqli_fetch_array($query)) {
		
			?>
				<tr>
					 <th><?php echo $data['id_reporte'];?></th>
                          <td><?php echo $data['descripcion'];?></td>
                          <td><?php echo $data['fecha_hora'];?></td>
                          <td><?php echo $data['solucion'];?></td>
                          <td><?php echo $data['fechahora'];?></td>
                          <td><?php echo $data['soluciono'];?></td>
                          <td><?php echo $data['tiempoinver']." minutos";?></td>
                        
				</tr>	

			<?php
		}

	?>
</table>
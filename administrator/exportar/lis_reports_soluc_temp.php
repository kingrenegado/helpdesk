<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=reportes_soluc_temp.xls');

	include '../conexion.php';
 $query=mysqli_query($con,"SELECT mreporte.id_reporte, soluciontemporal.idsoluciontemp,mreporte.descripcion,mreporte.fecha_hora,soluciontemporal.fechahora,soluciontemporal.soluciontemp FROM soluciontemporal INNER JOIN mreporte on mreporte.id_reporte = soluciontemporal.id_mreporte where mreporte.status = 2 ORDER BY fechahora ASC ");
              $result = mysqli_num_rows($query);
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
<table border="1">
	<tr >
    <th>#Reporte</th>
                          <th>Descripcion del Reporte</th>
                          <th>Fecha del Reporte</th>
                          <th>Solucion Temporal</th>
                         <th>Fecha Hora sol. Temp.</th>
	 
	</tr>
	<?php
		while ($data=mysqli_fetch_array($query)) {
      
			?>
				<tr>
					 <th><?php echo $data['id_reporte'];?></th>
                          <td><?php echo $data['descripcion'];?></td>
                          <td><?php echo $data['fecha_hora'];?></td>
                          <td><?php echo $data['soluciontemp'];?></td>
                          <td><?php echo $data['fechahora'];?></td>
				</tr>	

			<?php
		}

	?>
</table>
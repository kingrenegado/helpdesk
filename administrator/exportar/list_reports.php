<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=reportes.xls');

	include '../conexion.php';
 $query=mysqli_query($con,"SELECT musuario.id_carea,carea.id_carea,carea.area,creportes.reporte,mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora,musuario.nombre,mreporte.status FROM mreporte INNER JOIN creportes on creportes.idcreporte = mreporte.idcreporte INNER JOIN musuario on musuario.idusuario = mreporte.idusuario
INNER JOIN carea on carea.id_carea = musuario.id_carea
where mreporte.status = 1 ORDER BY mreporte.id_reporte ASC ");
              $result = mysqli_num_rows($query);
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
<table border="1">
	<tr >
		 <th># Reporte</th>
                          <th>Reporte</th>
                          <th>Descricion</th>
                          <th>Fecha Hora</th>
                          <th>Quien Reporto</th>
                          <th>Área</th>
                          <th>Status</th>
	</tr>
	<?php
		while ($data=mysqli_fetch_array($query)) {
			$texto="";
                if ($data['status']==2) {
                            $texto = " Solucion Temporal";
                }else{
             $texto = "Reporte Abierto";
         }
			?>
				<tr>
					<td><?php echo $data['id_reporte'];?></td>
                          <td><?php echo $data['reporte'];?></td>
                          <td><?php echo $data['descripcion'];?></td>
                          <td><?php echo $data['fecha_hora'];?></td>
                          <td><?php echo $data['nombre'];?></td>
                          <td><?php echo $data['area']?> </td>
                          <td><?php echo $texto;?></td>
				</tr>	

			<?php
		}

	?>
</table>
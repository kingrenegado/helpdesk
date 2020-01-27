<div id="addsolucionModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<form name="add_product" id="add_product" action="agg_solucion.php" method="post">
<div class="modal-header">
<h4 class="modal-title" style="color: blue"><i class="fas fa-search-plus" style="color: blue"></i> Agregar Solucion</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
</div>
<div class="modal-body">
<div class="form-group">
<label style="color: blue">Selecciona que Reporte Solucionaras:</label><div class="form-group">
    <?php

        $query_reporte=mysqli_query($con,"SELECT mreporte.id_reporte,mreporte.descripcion,mreporte.fecha_hora FROm mreporte where status=1");

        $result_reporte = mysqli_num_rows($query_reporte);

    ?>
  <select name="reporte" id="reporte" class="form-control" style="color: blue">
    <option>---Selecciona el problema---</option>
    <?php 
    
        if ($result_reporte > 0) {
            while($reporte = mysqli_fetch_array($query_reporte)){        
    ?>
        <option value="<?php echo $reporte['id_reporte']?>"  ><?php echo $reporte['descripcion']?></option>

    <?php
        }
    }
    ?>
    </select>
<label style="color: blue">Descripcion de la solucion</label>
<br/>
<textarea name="descripcion" cols="20" rows="4"  class="form-control" >   </textarea>
</div>
</div>
<div class="modal-footer">
<center>
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-ban"></i> Cancelar</button>
<button type="submit" class="btn btn-success"><i class="fas fa-folder-plus"></i> Reportar</button>
</center>
</div>
</div>
</form>
</div>
</div>
</div>
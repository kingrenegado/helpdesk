<div id="addreporteModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<form name="add_reporte" id="add_reporte" method="post" action="add_reporte.php">
<div class="modal-header">
<h4 class="modal-title" style="color: blue"><i class="fas fa-search-plus" style="color: blue"></i> Agregar Reporte</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
</div>
<div class="modal-body">
<div class="form-group">
    <div class="form-group">
<label style="color: blue">Selecciona tu nombre:</label><div class="form-group">
    <?php
        $nombre = $_SESSION['nombre'];
        $query_usuario=mysqli_query($con,"SELECT * FROM musuario ORDER BY nombre");

        $result_usuario = mysqli_num_rows($query_usuario);

    ?>
  <select name="usuario" id="usuario" class="form-control" style="color: blue">
    <?php 
    
        if ($result_usuario > 0) {
            while($usuario = mysqli_fetch_array($query_usuario)){        
    ?>
        <option value="<?php echo $usuario['idusuario']?>"  ><?php echo $usuario['nombre']?></option>

    <?php
        }
    }
    ?>
    </select>
</div>
<label style="color: blue">Tipo de Reportes:</label><div class="form-group">
    <?php

        $query_treporte=mysqli_query($con,"SELECT * FROM creportes order by reporte asc");

        $result_treporte = mysqli_num_rows($query_treporte);

    ?>
  <select name="reporte" id="reporte" class="form-control" style="color: blue">
    <?php 
    
        if ($result_treporte > 0) {
            while($reporte = mysqli_fetch_array($query_treporte)){        
    ?>
        <option value="<?php echo $reporte['idcreporte']?>"  ><?php echo $reporte['reporte']?></option>

    <?php
        }
    }
    ?>
    </select>
<label style="color: blue">Descripcion del reporte</label>
<br/>
<textarea name="descripcion" cols="20" rows="4"  class="form-control" >   </textarea>
</div>
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

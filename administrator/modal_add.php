<div id="addUsserModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<form name="add_usser" id="add_usser" method="post" action="registro.php">
<div class="modal-header"> 
<h4 class="modal-title" style="color: blue"><i class="fa fa-user-plus" style="color: blue"></i> Agregar Usuario</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
</div>
<div class="modal-body">
<div class="form-group">
<label style="color: blue">Nombre</label>
<input type="text" name="nombre"  id="nombre" class="form-control" required>
</div>
<div class="form-group">
<label style="color: blue">Correo</label>
<input type="email" name="correo" id="correo" class="form-control" required>
</div>
<div class="form-group">
<label style="color: blue">Nombre de Usuario</label>
<input type="text" name="nomusuario" id="nomusuario" class="form-control" required>
</div>
<div class="form-group">
<label style="color: blue">Password</label>
<input type="password" name="password" id="password" class="form-control" required>
</div>
<div class="form-group">
<label style="color: blue">Área</label>

    <?php

        $query_area=mysqli_query($con,"SELECT id_carea,area FROM carea order by area asc");

        $result_area = mysqli_num_rows($query_area);

    ?>
  <select name="area" id="area" class="form-control" style="color: blue">
    <?php 
    
        if ($result_area > 0) {
            while($area = mysqli_fetch_array($query_area)){        
    ?>
        <option value="<?php echo $area['id_carea']?>"  ><?php echo $area['area']?></option>

    <?php
        }
    }
    ?>
    </select>
</div>
<div class="form-group">
<label style="color: blue">Puesto</label>

    <?php

        $query_puesto=mysqli_query($con,"SELECT id_cpuesto,puesto FROM cpuesto order by puesto asc");

        $result_puesto = mysqli_num_rows($query_puesto);

    ?>
  <select name="puesto" id="puesto" class="form-control" style="color: blue">
    <?php 
    
        if ($result_puesto > 0) {
            while($puesto = mysqli_fetch_array($query_puesto)){        
    ?>
        <option value="<?php echo $puesto['id_cpuesto']?>"><?php echo $puesto['puesto']?></option>
    <?php
        }
    }
    ?>
    </select>
</div>
</div>
<div class="modal-footer">
<center>
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-ban"></i> Cancelar</button>
<button type="submit" class="btn btn-success"><i class="fas fa-user-plus"></i> Registrar Usuario</button>

</center>
</div>
</form>
</div>
</div>
</div>
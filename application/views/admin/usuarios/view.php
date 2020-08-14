<div class="col-lg-12 mt-5">
  <div class="card">
    <div class="card-header" align="center">
      <img src="<?php echo base_url();?>uploads/imagenes/usuarios/100x100/<?php echo $usuario->avatar; ?>" class="img-fluid img-thumbnail" alt="<?php echo $usuario->username; ?>">
    </div>
    <div class="card-body">
      <h2 class="text-primary" align="center">
        <?php echo $usuario->nombre; ?>
        <br>
        <small class="text-muted, text-success"><?php echo $usuario->username; ?></small>
      </h2>
      <h5 class="text-dark">
        Estado:
        <small class="text-muted, text-secondary"><?php echo $usuario->status; ?></small>
      </h5>
      <h5 class="text-dark">
        Rol:
        <small class="text-muted, text-secondary"><?php echo $usuario->rol; ?></small>
      </h5>


    </div>
  </div>
</div>

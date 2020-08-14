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
      <br>
      <div class="row">
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"  align="left">

          <a href="<?php echo base_url();?>admin/usuarios/avatarUpdate/<?php echo $usuario->id?>" class="btn btn-outline-primary"> <i class="fa fa-photo"></i> Cambiar Abatar</a>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6"  align="right">
          <a href="<?php echo base_url();?>admin/usuarios/password/<?php echo $usuario->id?>" class="btn btn-outline-primary"> <i class="fa fa-refresh"></i> Cambiar contraseña</a>
        </div>
      </div>
    </div>
  </div>
</div>

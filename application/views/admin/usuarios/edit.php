<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Usuarios</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/usuarios">usuarios</a></li>
            <li class="breadcrumb-item active">editar</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- general form elements disabled -->
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Editar Usuario</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="<?php echo base_url(); ?>admin/usuarios/update/<?php echo $usuario->id; ?>" method="POST" enctype="multipart/form-data">
                <!-- Primera fila imagen -->
                <div class="row">
                  <div class="col-sm-12 my-1">
                    <div class="form-group" align="center">
                      <img id="imgSalida" src="<?php echo base_url(); ?><?php echo $usuario->avatar; ?>" width="30%" height="30%">
                    </div>
                  </div>
                </div>
                <!-- Segunda fila nombre y descripción -->
                <div class="row">
                  <!-- Nombre -->
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" value="<?php echo $usuario->nombre; ?>" required>
                    </div>
                  </div>
                  <!-- Nickname -->
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Nickname</label>
                      <input type="text" class="form-control" placeholder="Nickname" id="nick" name="nick" value="<?php echo $usuario->username; ?>" required>
                    </div>
                  </div>
                   <!-- Status -->
                   <div class="col-sm-3">
                    <div class="form-group">
                      <label>Status</label>
                      <select class="custom-select" name="status" id="status">
                        <?php foreach ($menu_status as $status) : ?>
                          <option value="<?php echo $status->id; ?>" <?php echo $status->id == $usuario->id_estado ? "selected" : "" ?>><?php echo $status->nombre; ?>
                          </option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>

                  <!-- Rol -->
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Rol</label>
                      <select class="custom-select" name="rol" id="rol">
                        <?php foreach ($roles as $rol) : ?>
                          <option value="<?php echo $rol->id; ?>" <?php echo $rol->id == $usuario->id_rol ? "selected" : "" ?>><?php echo $rol->nombre; ?>
                          </option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                 

                </div>

                <!-- Quinta fila imagen y boton guardar -->
                <div class="row">
                  <!-- Password -->
                  <div class="col-sm-4">
                    <div class="form-group">
                      <a href="<?php echo base_url(); ?>admin/usuarios/passwordreset/<?php echo $usuario->id; ?>">Restablecer password</a>
                    </div>
                  </div>
                    <!-- imagen -->
                    <div class="col-sm-4">
                    <div class="form-group">
                      <a href="<?php echo base_url(); ?>admin/usuarios/cabiarfoto/<?php echo $usuario->id; ?>">Cambiar imagen</a>
                    </div>
                  </div>
                  <!-- Cuarta fila Boton guardar -->
                  <div class="col-sm-4 my-1">
                    <div class="form-group">
                      <button type="submit" class="btn btn-outline-secondary mb-3">Guardar</button>
                    </div>
                  </div>

                </div>

              
              </form>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
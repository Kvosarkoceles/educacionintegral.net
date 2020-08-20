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
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Inicio</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/profesores/profesores/">Lista</a></li>
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
              <h3 class="card-title">Usuario Configuración</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="" method="POST" enctype="multipart/form-data">
                <!-- Primera Fila foto del usuario -->
                <div class="row">
                  <div class="col-sm-12 my-1">
                    <div class="form-group" align="center">
                      <img id="imgSalida" src="<?php echo base_url(); ?><?php echo $usuario->avatar; ?>" width="30%" height="30%">
                      <h2>
                        <?php echo $usuario->username; ?>
                      </h2>
                    </div>
                  </div>
                </div>
                <!-- Segunda Fila -->
                <div class="row">
                  <!-- Nombre -->
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>nombre</label>
                      <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $usuario->nombre; ?>" id="nombre" name="nombre">
                    </div>
                  </div>
                  <!-- Username -->
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $usuario->username; ?>" id="username" name="username">
                    </div>
                  </div>

                
                </div>



                <!-- Cuarta fila -->
                <div class="row">
                  <!-- Cambiar contraseña -->
                  <div class="col-sm-3">
                    <div class="form-group">
                      <a href="<?php echo base_url(); ?>admin/usuarios/cabiarfoto/<?php echo $usuario->id; ?>"> Cambiar la imagen</a>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <a href="<?php echo base_url(); ?>admin/usuarios/password/<?php echo $usuario->id; ?>"> Cambiar contraseña</a>
                    </div>
                  </div>
                  <!-- Boton guardar -->
                  <div class="col-sm-6  my-1 ">
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
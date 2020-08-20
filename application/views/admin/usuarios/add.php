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
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/cursos/cursos">cursos</a></li>
            <li class="breadcrumb-item active">agregar</li>
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
              <h3 class="card-title">Agrega Usuario</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="<?php echo base_url(); ?>admin/usuarios/store" method="POST" enctype="multipart/form-data">
                <!-- Primera fila imagen -->
                <div class="row">
                  <div class="col-sm-12 my-1">
                    <div class="form-group" align="center">
                      <img id="imgSalida" width="50%" height="50%">
                    </div>
                  </div>
                </div>
                <!-- Segunda fila nombre y descripción -->
                <div class="row">
                  <!-- Nombre -->
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" required>
                    </div>
                  </div>
                  <!-- Nickname -->
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Nickname</label>
                      <input type="text" class="form-control" placeholder="Nickname" id="nick" name="nick" required>
                    </div>
                  </div>
                  <!-- Password -->
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="password" id="password" name="password" required>
                    </div>
                  </div>
                  <!-- Roles -->
                  <div class="col-sm-3 my-1 ">
                    <div class="form-group">
                      <label>Rol</label>
                      <select class="form-control" name="rol" id="rol">
                        <?php foreach ($roles as $rol) : ?>
                          <option value="<?php echo $rol->id;?>" <?php echo set_select('rol',$rol->id); ?>><?php echo $rol->nombre;?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>

                </div>             
             
                <!-- Quinta fila imagen y boton guardar -->
                <div class="row">
                  <!-- Cuarta imagen -->
                  <div class="col-sm-6  my-1 ">
                    <div class="form-group">
                      <label for="imagen">Imagen:</label>
                      <input type="file" name=mi_archivo id=mi_archivo class="form-control" accept=".gif, .jpg, .jpeg, .png" required>
                    </div>
                  </div>
                  
                </div>
                <!-- Cuarta fila Boton guardar -->
                <div class="col-sm-6 my-1">
                    <div class="form-group">
                      <button type="submit" class="btn btn-outline-secondary mb-3">Guardar</button>
                    </div>
                  </div>
                <div class="row">

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
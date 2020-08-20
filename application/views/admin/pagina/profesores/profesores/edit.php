<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profesores</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Inicio</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/profesores/profesores/">Lista</a></li>
              <li class="breadcrumb-item active">editar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edita Profesor</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?php echo base_url(); ?>admin/profesores/profesores/update/<?php echo $profesor->id; ?>" method="POST" enctype="multipart/form-data">
                  <!-- Foto del profesor -->
                  <div class="row">
                    <div class="col-sm-12 my-1">
                      <div class="form-group" align="center">
                        <img id="imgSalida" src="<?php echo base_url(); ?><?php echo $profesor->imagen; ?>" width="30%" height="30%">
                      </div>
                    </div>
                  </div>
                  <!-- nombre del profesor -->
                  <div class="row">
                    <!-- Nombre -->
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $profesor->nombre; ?>" id="nombre" name="nombre" required>
                      </div>
                    </div>
                    <!-- Segundo nombret -->
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Segundo Nombre</label>
                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $profesor->segundoNombre; ?>" id="segundoNombre" name="segundoNombre">
                      </div>
                    </div>
                    <!-- Primer apellido -->
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Primer Apellido</label>
                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $profesor->primerApellido; ?>" id="primerApellido" name="primerApellido" required>
                      </div>
                    </div>
                    <!-- Segundo apellido -->
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Segundo Apellido</label>
                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $profesor->segundoApellido; ?>" id="segundoApellido" name="segundoApellido" required>
                      </div>
                    </div>
                  </div>
                  <!-- Segunda fila -->
                  <div class="row">
                    <!-- Carrera -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Carrera</label>
                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $profesor->carrera; ?>" id="carrera" name="carrera" required>
                      </div>
                    </div>
                    <!-- Status -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Status</label>
                        <select class="custom-select" name="status" id="status">
                          <?php foreach ($menu_status as $status) : ?>
                            <option value="<?php echo $status->id; ?>" <?php echo $status->id == $profesor->idStatus ? "selected" : "" ?>><?php echo $status->nombre; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- Tercera fila curriculum-->
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="descripcion_pagina">Curiculum</label>
                      <textarea name="curriculum" id="curriculum">
          <?php echo $profesor->curriculum; ?>
              </textarea>
                    </div>
                  </div>
                  <!-- Cuarta fila -->
                  <div class="row">
                    <!-- Cambiar imagen -->
                    <div class="col-sm-6">
                      <div class="form-group">
                        <a href="<?php echo base_url(); ?>admin/profesores/profesores/cabiarfoto/<?php echo $profesor->id; ?>"> Cambiar la imagen</a>
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
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
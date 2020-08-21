<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Cursos</h1>
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
              <h3 class="card-title">Agrega Curso</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="<?php echo base_url(); ?>admin/cursos/cursos/store" method="POST" enctype="multipart/form-data">
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
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Nombre</label>
                      <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre">
                    </div>
                  </div>
                  <!-- Subtitulo -->
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Subtitulo</label>
                      <input type="text" class="form-control" placeholder="subtitulo" id="subtitulo" name="subtitulo">
                    </div>
                  </div>
                </div>
                <!-- Tercera fila status y profesor -->
                <div class="row">
                  <!-- Status -->
                  <div class="col-sm-3 my-1 ">
                    <!-- select -->
                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control" name="status" id="status">
                        <option value="1">Activado</option>
                        <option value="2"> Desactivado</option>
                      </select>
                    </div>
                  </div>
                  <!-- Popular -->
                  <div class="col-sm-3 my-1 ">
                    <div class="form-group">
                      <label>Popular</label>
                      <select class="form-control" name="popular" id="popular">
                        <option value="1">Activado</option>
                        <option value="2"> Desactivado</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6 my-1 ">
                    <!-- select -->
                    <div class="form-group">
                      <label>Profesor</label>
                      <select class="form-control" name="profesor" id="profesor">
                        <?php foreach ($menu_profesores as $profesor) : ?>
                          <option value="<?php echo $profesor->id; ?>">
                            <?php echo $profesor->nombre; ?>
                            <?php if ($profesor->segundoNombre === '') : ?>
                              <?php echo " "; ?>
                            <?php else : ?>
                              <?php echo $profesor->segundoNombre; ?>
                            <?php endif; ?>
                            <?php if ($profesor->primerApellido === '') : ?>
                              <?php echo " "; ?>
                            <?php else : ?>
                              <?php echo $profesor->primerApellido; ?>
                            <?php endif; ?>
                            <?php echo $profesor->segundoApellido; ?>
                          </option>

                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- Cuarta fila Descripción -->
                <div class="row">
                  <div class="col-sm-12">
                    <label for="descripcion_pagina">Descripción del curso</label>
                    <textarea name="descripcion" id="descripcion" rows="8" cols="80" class="summernote"></textarea>
                  </div>
                </div>
                <!-- Quinta fila imagen y boton guardar -->
                <div class="row">
                  <!-- Cuarta imagen -->
                  <div class="col-sm-6  my-1 ">
                    <div class="form-group">
                      <label for="imagen">Imagen:</label>
                      <input type="file" name=mi_archivo id=mi_archivo class="form-control" accept=".gif, .jpg, .jpeg, .png">
                    </div>
                  </div>
                  <!-- Cuarta fila Boton guardar -->
                  <div class="col-sm-6 my-1">
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
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- right column -->
      <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Agrega Profesor</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="<?php echo base_url(); ?>admin/profesores/profesores/store" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-12 my-1">
                  <div class="form-group" align="center">
                    <img id="imgSalida" width="50%" height="50%">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre">
                  </div>
                </div>
                <div class="col-sm-3">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Segundo Nombre</label>
                    <input type="text" class="form-control" placeholder="Segundo Nombre" id="segundoNombre" name="segundoNombre">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Primer Apellido</label>
                    <input type="text" class="form-control" placeholder="Primer Apellido" id="primerApellido" name="primerApellido">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Segundo Apellido</label>
                    <input type="text" class="form-control" placeholder="Segundo Apellido" id="segundoApellido" name="segundoApellido">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Carrera</label>
                    <input type="text" class="form-control" placeholder="Carrera" id="carrera" name="carrera">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" id="status">
                      <option value="1">Activado</option>
                      <option value="o"> Desactivado</option>
                    </select>
                  </div>
                </div>
              </div>
              <!-- Tercera fila curriculum-->
              <div class="row">
                <div class="col-sm-12">
                  <label for="descripcion_pagina">Curiculum</label>
                  <textarea name="curriculum" id="curriculum" rows="8" cols="80" class="summernote"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6  my-1 ">
                  <div class="form-group">
                    <label for="imagen">Imagen:</label>
                    <input type="file" name=mi_archivo id=mi_archivo class="form-control" accept=".gif, .jpg, .jpeg, .png">
                  </div>
                </div>
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
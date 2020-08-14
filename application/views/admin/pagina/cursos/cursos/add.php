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
              <div class="row">
                <div class="col-sm-12 my-1">
                  <div class="form-group" align="center">
                    <img id="imgSalida" width="50%" height="50%">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre">
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" class="form-control" placeholder="descripcion" id="descripcion" name="descripcion">
                  </div>
                </div>
                
              </div>
              <div class="row">
                 <div class="col-sm-6 my-1 ">
                  <!-- select -->
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" id="status" >
                      <option value="1">Activado</option>
                      <option value="o"> Desactivado</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6  my-1 ">
                  <div class="form-group">
                    <label for="imagen">Imagen:</label>
                    <input type="file" name=mi_archivo id=mi_archivo class="form-control" accept=".gif, .jpg, .jpeg, .png">
                  </div>
                </div>
              </div>
              <div class="row">
                
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
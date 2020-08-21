<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Integra</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Inicio</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/pagina/slider">list</a></li>
                <li class="breadcrumb-item active">slider</li>
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
            <h3 class="card-title">Agrega Slider</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="<?php echo base_url(); ?>admin/pagina/slider/store" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-sm-12 my-1">
                  <div class="form-group" align="center">
                    <img id="imgSalida" width="30%" height="30%">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Slogan</label>
                    <input type="text" class="form-control" placeholder="Slogan" id="slogan" name="slogan">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <!-- textarea -->
                  <div class="form-group">
                    <label>Descripción(interno)</label>
                    <textarea class="form-control" rows="3" placeholder="Descripcion (interno)" id="descripcion" name="descripcion"></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <!-- select -->
                  <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status" id="status" >
                      <option value="1">Activado</option>
                      <option value="o"> Desactivado</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6  my-1 ">
                  <div class="form-group">
                    <label for="imagen">Imagen:</label>
                    <input type="file" name=mi_archivo id=mi_archivo class="form-control" accept=".gif, .jpg, .jpeg, .png" required>
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
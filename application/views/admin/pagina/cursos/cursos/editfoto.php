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
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/cursos/cursos/edit/<?php echo $curso->id; ?>">perfil</a></li>
            <li class="breadcrumb-item active">cambiar imagen</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="col-lg-12 mt-5">
    <form action="<?php echo base_url(); ?>admin/cursos/cursos/imagenupdate/1" method="POST" enctype="multipart/form-data">
      <div class="card">
        <div class="card-body">
          <h3 class="header-title">Cambiar imagen del curso (690px * 520px)</h3>
          <div class="form-row align-items-center">
            <div class="col-sm-12 my-1 ">

              <div class="col-lg-12 col-md-6 col-sm-6">
                <div class="form-group" align="center">
                  <input type="hidden" class="form-control" value="<?php echo $curso->imagen; ?>" id="imagenold" name="imagenold">
                  <input type="hidden" class="form-control" value="<?php echo $curso->id; ?>" id="id" name="id">
                  <input type="hidden" class="form-control" value="<?php echo $curso->nombre; ?>" id="nombre" name="nombre">

                  <img id="imgSalida" src="<?php echo base_url(); ?><?php echo $curso->imagen; ?>" />
                </div>
              </div>

            </div>
            <div class="container">
              <div class="row">
                <div class="col align-self-end col-sm-6 my-1 ">
                  <div class="form-group">
                    <label for="imagen">Imagen:</label>
                    <input type="file" name=mi_archivo id=mi_archivo class="form-control" accept=".png, .jpg, .jpeg">
                  </div>
                </div>
              </div>
              <div class="row justify-content-between float-right">
                <div class="col align-self-start">
                  <div class="form-group">
                    <button type="submit" class="btn btn-outline-secondary mb-3">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
  </div>
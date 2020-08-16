<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard v3</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v3</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
<div class="col-lg-12 mt-5">
  <form action="<?php echo base_url();?>admin/pagina/logo/imagenStore/1" method="POST" enctype="multipart/form-data">
   
    <div class="card">

      <div class="card-body">
        <h3 class="header-title">Cambiar portada cursos (51px * 43px, solo archivos png)</h3>
        <div class="form-row align-items-center">
          <div class="col-sm-6  my-1 ">
            <div class="form-group">
              <label for="imagen">Imagen:</label>
              <input type="file" name=mi_archivo id=mi_archivo class="form-control" accept=".png" >
            </div>
            <div class="col-lg-12 col-md-6 col-sm-6">
              <div class="form-group" align="center" >
                 <img id="imgSalida" src="<?php echo base_url();?>assets/images/logo.png"/>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-outline-secondary mb-3">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
</div>

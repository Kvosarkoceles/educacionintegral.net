<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Tags</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Inicio</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/noticias/tags/">Lista</a></li>
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
                        <h3 class="card-title">Edita Tag</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="<?php echo base_url(); ?>admin/noticias/tags/update/<?php echo $tag->id; ?>" method="POST" enctype="multipart/form-data">
                          
                            <!-- Primera fila nombre y status  -->
                            <div class="row">
                                <!-- Nombre -->
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $tag->nombre; ?>" id="nombre" name="nombre">
                                    </div>
                                </div>   
                                <!-- Status -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="custom-select" name="status" id="status">
                                            <?php foreach ($menu_status as $status) : ?>
                                                <option value="<?php echo $status->id; ?>" <?php echo $status->id == $tag->idStatus ? "selected" : "" ?>><?php echo $status->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>                          
                            </div>
                            <!-- Cuarta fila Boton-->
                            <div class="row">                              
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
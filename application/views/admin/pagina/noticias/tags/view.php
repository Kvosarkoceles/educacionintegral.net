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
                        <form action="<?php echo base_url(); ?>admin/noticias/tags/edit/<?php echo $tag->id; ?>" method="POST" enctype="multipart/form-data">
                          
                            <!-- Primera fila nombre y status  -->
                            <div class="row">
                                <!-- Nombre -->
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <p> <?php echo $tag->nombre; ?> </p>                                        
                                    </div>
                                </div>   
                                <!-- Status -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Status</label>

                                        <p>
                                        <?php if ($tag->idStatus == 2) : ?>
                              Desactivado
                            <?php elseif ($tag->idStatus == 1) : ?>
                              Activado
                            <?php else : ?>
                              unknown
                            <?php endif; ?>
                                        </p>
                                        
                                    </div>
                                </div>                          
                            </div>
                            <!-- Cuarta fila Boton-->
                            <div class="row">                              
                                <!-- Boton guardar -->
                                <div class="col-sm-6  my-1 ">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-outline-secondary mb-3">Editar</button>
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
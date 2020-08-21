<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Nosotros</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/pagina/nosotros">Lista</a></li>
                        <li class="breadcrumb-item active">lista</li>
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
                            <h3 class="card-title">Edita <?php echo $nosotros->nombre ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>admin/pagina/nosotros/edit/<?php echo $nosotros->id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12 my-1">
                                        <div class="form-group" align="center">
                                            <img id="imgSalida" src="<?php echo base_url(); ?><?php echo $nosotros->imagen; ?>" width="30%" height="30%">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Nombre -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <p><?php echo $nosotros->nombre; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <p>
                                                <?php if ($nosotros->idStatus == 2) : ?>
                                                    Desactivado
                                                <?php elseif ($nosotros->idStatus == 1) : ?>
                                                    Activado
                                                <?php else : ?>
                                                    unknown
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <p>
                                            <?php echo $nosotros->texto; ?>
                                            </p>                                            
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <a href="<?php echo base_url(); ?>admin/pagina/nosotros/cabiarfoto/<?php echo $nosotros->id ?>"> Cambiar la imagen</a>

                                        </div>
                                    </div>
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
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
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/cursos/cursos/">curso</a></li>
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
                            <h3 class="card-title">Edita Curso</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>admin/cursos/cursos/edit/<?php echo $curso->id; ?>" method="POST" enctype="multipart/form-data">
                                <!-- Primera fila imagen -->
                                <div class="row">
                                    <div class="col-sm-12 my-1">
                                        <div class="form-group" align="center">
                                            <img id="imgSalida" src="<?php echo base_url(); ?><?php echo $curso->imagen; ?>" width="30%" height="30%">
                                        </div>
                                    </div>
                                </div>
                                <!-- Segunda fila nombre y descripción -->
                                <div class="row">
                                    <!-- Nombre -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <p><?php echo $curso->nombre; ?></p>
                                        </div>
                                    </div>
                                    <!-- Subtitulo -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Subtitulo</label>
                                            <p><?php echo $curso->subtitulo; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tercera fila status y profesor -->
                                <div class="row">
                                   
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Popular</label>
                                            <p><?php echo $curso->estadoPopular; ?></p>                                            
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <p><?php echo $curso->status; ?></p>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Profesor</label>
                                            <p>
                                                <?php echo $curso->profesorNombre; ?> <?php echo " "; ?><?php echo $curso->profesorApellido; ?>
                                            </p>

                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- Cuarta fila Descripción -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="descripcion_pagina">Descripción del curso</label>
                                        <p><?php echo $curso->descripcion; ?></p>

                                    </div>
                                </div>
                                <!-- Quinta fila imagen y boton guardar -->
                                <div class="row">
                                    
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
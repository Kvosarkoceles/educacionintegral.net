<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Noticias</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/profesores/profesores/">Lista</a></li>
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
                            <h3 class="card-title">Edita Noticias</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>admin/noticias/noticias/update/<?php echo $noticia->id; ?>" method="POST" enctype="multipart/form-data">
                                <!-- Primera Fila foto de la noticia -->
                                <div class="row">
                                    <div class="col-sm-12 my-1">
                                        <div class="form-group" align="center">
                                            <img id="imgSalida" src="<?php echo base_url(); ?><?php echo $noticia->imagen; ?>" width="30%" height="30%">
                                        </div>
                                    </div>
                                </div>
                                <!-- Segunda Fila -->
                                <div class="row">
                                    <!-- Titulo -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>titulo</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $noticia->titulo; ?>" id="titulo" name="titulo">
                                        </div>
                                    </div>
                                    <!-- Autor -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Autor</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $noticia->autor; ?>" id="autor" name="autor">
                                        </div>
                                    </div>
                                    <!-- Fecha -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>fecha</label>
                                            <input type="date" class="form-control" placeholder="Enter ..." value="<?php echo $noticia->fecha; ?>" id="fecha" name="fecha">
                                        </div>
                                    </div>
                                </div>
                                <!-- Tecera fila -->
                                <div class="row">
                                    <!-- Tags -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Tag</label>
                                            <select class="custom-select" name="tag" id="tag">
                                                <?php foreach ($tags as $tag) : ?>
                                                    <option value="<?php echo $tag->id; ?>" <?php echo $tag->id == $noticia->id_tag ? "selected" : "" ?>><?php echo $tag->nombre; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Status -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="custom-select" name="status" id="status">
                                                <?php foreach ($menu_status as $status) : ?>
                                                    <option value="<?php echo $status->id; ?>" <?php echo $status->id == $noticia->idStatus ? "selected" : "" ?>><?php echo $status->nombre; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Descripción -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea class="form-control" rows="4" name="descripcion" id="descripcion">
                                                <?php echo $noticia->descripcion; ?>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tercera fila Texto-->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="descripcion_pagina">Texto</label>
                                        <textarea name="noticia" id="noticia" rows="8" cols="80" class="summernote"><?php echo $noticia->texto; ?></textarea>
                                    </div>
                                </div>
                                <!-- Cuarta fila -->
                                <div class="row">
                                    <!-- Cambiar imagen -->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <a href="<?php echo base_url(); ?>admin/noticias/noticias/cabiarfoto/<?php echo $noticia->id; ?>"> Cambiar la imagen</a>
                                        </div>
                                    </div>
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
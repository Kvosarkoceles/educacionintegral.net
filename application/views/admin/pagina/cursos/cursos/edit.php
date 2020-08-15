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
                        <form action="<?php echo base_url(); ?>admin/cursos/cursos/update/<?php echo $curso->id; ?>" method="POST" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $curso->nombre; ?>" id="nombre" name="nombre">
                                    </div>
                                </div>
                                <!-- Subtitulo -->
                                <div class="col-sm-6">                                   
                                    <div class="form-group">
                                        <label>Subtitulo</label>
                                        <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $curso->subtitulo; ?>" id="subtitulo" name="subtitulo">
                                    </div>
                                </div>
                            </div>
                            <!-- Tercera fila status y profesor -->
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="custom-select" name="status" id="status">
                                            <?php foreach ($menu_status as $status) : ?>
                                                <option value="<?php echo $status->id; ?>" <?php echo $status->id == $curso->idStatus ? "selected" : "" ?>><?php echo $status->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Popular</label>
                                        <select class="custom-select" name="popular" id="popular">
                                            <?php foreach ($menu_status as $status) : ?>
                                                <option value="<?php echo $status->id; ?>" <?php echo $status->id == $curso->popular ? "selected" : "" ?>><?php echo $status->nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Profesor</label>
                                        <select class="custom-select" name="profesor" id="profesor">
                                            <?php foreach ($menu_profesores as $status) : ?>
                                                <option value="<?php echo $status->id; ?>" <?php echo $status->id == $curso->id_profesor ? "selected" : "" ?>><?php echo $status->nombre; ?>
                                                    <?php if ($status->segundoNombre === '') : ?>
                                                        <?php echo " "; ?>
                                                    <?php else : ?>
                                                        <?php echo $status->segundoNombre; ?>
                                                    <?php endif; ?>
                                                    <?php if ($status->primerApellido === '') : ?>
                                                        <?php echo " "; ?>
                                                    <?php else : ?>
                                                        <?php echo $status->primerApellido; ?>
                                                    <?php endif; ?>
                                                    <?php echo $status->segundoApellido; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- Cuarta fila Descripción -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="descripcion_pagina">Descripción del curso</label>
                                    <textarea name="descripcion" id="descripcion" rows="8" cols="80" class="summernote"><?php echo $curso->descripcion; ?></textarea>
                                </div>
                            </div>
                            <!-- Quinta fila imagen y boton guardar -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- select -->
                                    <div class="form-group">
                                        <a href="<?php echo base_url(); ?>admin/cursos/cursos/cabiarfoto/<?php echo $curso->id; ?>"> Cambiar la imagen</a>
                                    </div>
                                </div>
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
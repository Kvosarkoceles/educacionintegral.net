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
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/pagina/slider">lista</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/pagina/slider/edit/<?php echo $slider->id; ?>">slider</a></li>
                        <li class="breadcrumb-item active">Edita Foto</li>
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
                            <h3 class="card-title">Edita Slider</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>admin/pagina/slider/update/<?php echo $slider->id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12 my-1">
                                        <div class="form-group" align="center">
                                            <img id="imgSalida" src="<?php echo base_url(); ?><?php echo $slider->imagen; ?>" width="50%" height="50%">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $slider->nombre; ?>" id="nombre" name="nombre" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Slogan</label>
                                            <input type="text" class="form-control" placeholder="Enter ..." value="<?php echo $slider->slogan; ?>" id="slogan" name="slogan">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..." id="descripcion" name="descripcion"><?php echo $slider->descripcion; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="custom-select" name="status" id="status">
                                                <?php foreach ($menu_status as $status) : ?>
                                                    <option value="<?php echo $status->id; ?>" <?php echo $status->id == $slider->idStatus ? "selected" : "" ?>><?php echo $status->nombre; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- select -->
                                        <div class="form-group">
                                            <a href="<?php echo base_url(); ?>admin/pagina/slider/cabiarfoto/<?php echo $slider->id; ?>"> Cambiar la imagen</a>

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
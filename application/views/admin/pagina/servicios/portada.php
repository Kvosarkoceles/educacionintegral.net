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
                            <h3 class="card-title">Portada Nosotros</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <form action="<?php echo base_url(); ?>admin/pagina/nosotros/portadaupdate" method="POST" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="header-title">Cambiar portada Nosotros (1920px * 467px), solo acepta en formatos jpg</h3>

                                        <h5 class="header-title">para ver los cambios despues de acuralizar apriete las teclas ctr + f5</h5>
                                        <div class="form-row align-items-center">
                                            <div class="col-sm-12 my-1 ">

                                                <div class="col-lg-12 col-md-6 col-sm-6">
                                                    <div class="form-group" align="center">

                                                        <img id="imgSalida" src="<?php echo base_url(); ?>assets/images/nosotros/background.jpg" width="50%" height="50%" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col align-self-end col-sm-6 my-1 ">
                                                        <div class="form-group">
                                                            <label for="imagen">Imagen:</label>
                                                            <input type="file" name=mi_archivo id=mi_archivo class="form-control" accept=" .jpg">
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
                            s




                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
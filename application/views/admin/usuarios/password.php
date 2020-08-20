<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Usuarios</h1>
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
                            <h3 class="card-title"><?php echo $usuario->username; ?> Cambiar Password</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?php echo base_url(); ?>admin/usuarios/passwordUpdate/<?php echo $usuario->id; ?> " method="POST" enctype="multipart/form-data">

                                <!-- Primera fila password -->
                                <div class="row">
                                    <!-- Password -->
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="password" id="password" name="password" required>
                                        </div>
                                    </div>

                                    <!-- Boton guardar -->
                                    <div class="col-sm-4 my-1 ">
                                        <div class="form-group float-right">
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
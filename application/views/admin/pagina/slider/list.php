<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Administrador</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url();?>admin">Inicio</a></li>
                <li class="breadcrumb-item active">Slider</li>
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
                            <h3 class="card-title">Sliders</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombres</th>
                     
                      <th>Status</th>
                      <th>Descripcion</th>
                      <th>Imagen</th>                   
                      <th>ver</th>
                      <th>editar</th>
                      <th>eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($sliders)) : ?>
                      <?php foreach ($sliders as $slider) : ?>
                        <tr>
                          <td><?php echo $slider->id; ?></td>
                          <td><?php echo $slider->nombre; ?></td>
                          
                          <td>
                            <?php if ($slider->idStatus == 2) : ?>
                              Desactivado
                            <?php elseif ($slider->idStatus == 1) : ?>
                              Activado
                            <?php else : ?>
                              unknown
                            <?php endif; ?>
                          </td>
                          <td><?php echo $slider->descripcion; ?></td>
                          <td>
                          <img src="<?php echo base_url();?><?php echo $slider->imagen; ?>" class="img-circle" alt="<?php echo $slider->nombre; ?>" height="50px" width="50px">  
                          </td>
                          <td><a href="<?php echo base_url();?>admin/pagina/slider/view/<?php echo $slider->id; ?>">ver</a></td>
                          <td><a href="<?php echo base_url();?>admin/pagina/slider/edit/<?php echo $slider->id; ?>">editar</a></td>
                          <td>eliminar</td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Nombres</th>
                     
                      <th>Status</th>
                      <th>Descripcion</th>
                      <th>Imagen</th>                     
                      <th>ver</th>
                      <th>editar</th>
                      <th>eliminar</th>
                    </tr>
                  </tfoot>
                </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
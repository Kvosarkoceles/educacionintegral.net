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
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Inicio</a></li>
            <li class="breadcrumb-item active">Lista</li>
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
                        <h3 class="card-title">Nosotros </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombres</th>                    
                    <th>Imagen</th>
                    <th>Status</th>
                    <th>ver</th>
                    <th>editar</th>
                    <th>eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($nosotros)) : ?>
                    <?php foreach ($nosotros as $nost) : ?>
                      <tr>
                        <td><?php echo $nost->id; ?></td>
                        <td><?php echo $nost->nombre; ?></td>
                        <td>
                          <img src="<?php echo base_url();?><?php echo $nost->imagen; ?>" class="img-circle" alt="<?php echo $nost->nombre; ?>" height="50px" width="50px">  
                          </td>
                        <td>
                            <?php if ($nost->idStatus == 2) : ?>
                              Desactivado
                            <?php elseif ($nost->idStatus == 1) : ?>
                              Activado
                            <?php else : ?>
                              unknown
                            <?php endif; ?>
                          </td>
                       
                        <td><a href="<?php echo base_url(); ?>admin/pagina/nosotros/view/<?php echo $nost->id; ?>">ver</a></td>
                        <td><a href="<?php echo base_url(); ?>admin/pagina/nosotros/edit/<?php echo $nost->id; ?>">editar</a></td>
                        <td>eliminar</td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Nombres</th>                   
                    <th>Imagen</th>
                    <th>Status</th>
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
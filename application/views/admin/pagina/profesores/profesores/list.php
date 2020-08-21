<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Administrador</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin">Inicio</a></li>
              <li class="breadcrumb-item active">lista</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Profesores</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombres</th>
                      <th>carrera</th>
                      <th>Status</th>
                      <th>ver</th>
                      <th>editar</th>
                      <th>eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($profesores)) : ?>
                      <?php foreach ($profesores as $profesor) : ?>
                        <tr>
                          <td><?php echo $profesor->id; ?></td>
                          <td><?php echo $profesor->nombre; ?> <?php echo $profesor->segundoNombre; ?> <?php echo $profesor->primerApellido; ?> <?php echo $profesor->segundoApellido; ?></td>
                          <td><?php echo $profesor->carrera; ?></td>
                          <td>
                            <?php if ($profesor->idStatus == 2) : ?>
                              Desactivado
                            <?php elseif ($profesor->idStatus == 1) : ?>
                              Activado
                            <?php else : ?>
                              unknown
                            <?php endif; ?>
                          </td>
                          <td><a href="<?php echo base_url(); ?>admin/profesores/profesores/view/<?php echo $profesor->id; ?>">ver</a></td>
                          <td><a href="<?php echo base_url(); ?>admin/profesores/profesores/edit/<?php echo $profesor->id; ?>">editar</a></td>
                          <td>eliminar</td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Nombres</th>
                      <th>carrera</th>
                      <th>Status</th>
                      <th>ver</th>
                      <th>editar</th>
                      <th>eliminar</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
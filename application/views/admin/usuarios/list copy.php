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
            <li class="breadcrumb-item active">lista</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Usuarios</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Status</th>
                    <th>editar</th>
                    <th>eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($usuarios)) : ?>
                    <?php foreach ($usuarios as $usuario) : ?>
                      <tr>
                        <td><?php echo $usuario->id; ?></td>
                        <td><?php echo $usuario->nombre; ?></td>
                        <td><?php echo $usuario->username; ?></td>
                        <td><?php echo $usuario->rol; ?></td>
                        <td><?php echo $usuario->status; ?></td>
                        <td>
                          <a href="<?php echo base_url() ?>admin/usuarios/edit/<?php echo $usuario->id; ?>">Editar</a>
                        </td>
                        <td>
                          <a href="<?php echo base_url(); ?>admin/usuarios/delete/<?php echo $usuario->id; ?>">Eliminar</a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Status</th>
                    <th>editar</th>
                    <th>eliminar</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
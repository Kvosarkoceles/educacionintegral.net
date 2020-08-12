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
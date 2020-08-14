    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
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
                          <td><?php echo $profesor->idStatus; ?></td>
                          <td>
                            <a href="<?php echo base_url(); ?><?php echo $profesor->idStatus; ?>" target="_blank">Ver</a>
                          </td>
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
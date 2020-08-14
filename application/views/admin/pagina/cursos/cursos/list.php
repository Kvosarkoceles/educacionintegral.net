    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Cursos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombres</th>
                      <th>Descripción</th>
                      <th>Status</th>
                      <th>ver</th>
                      <th>editar</th>
                      <th>eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($cursos)) : ?>
                      <?php foreach ($cursos as $curso) : ?>
                        <tr>
                          <td><?php echo $curso->id; ?></td>
                          <td><?php echo $curso->nombre; ?></td>
                          <td><?php echo $curso->descripcion; ?></td>
                          <td>
                            <?php if ($curso->idStatus == 2) : ?>
                              Desactivado
                            <?php elseif ($curso->idStatus == 1) : ?>
                              Activado
                            <?php else : ?>
                              unknown
                            <?php endif; ?>
                          </td>
                          <td>
                            <a href="<?php echo base_url(); ?><?php echo $curso->idStatus; ?>" target="_blank">Ver</a>
                          </td>
                          <td><a href="<?php echo base_url(); ?>admin/cursos/cursos/edit/<?php echo $curso->id; ?>">editar</a></td>
                          <td>eliminar</td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Nombres</th>
                      <th>Descripción</th>
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
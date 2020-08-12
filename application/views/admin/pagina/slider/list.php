    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Slider</h3>
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
                      <th>Observaciones</th>
                      <th>Imagen</th>
                      <th>Registro</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($sliders)) : ?>
                      <?php foreach ($sliders as $slider) : ?>
                        <tr>
                          <td><?php echo $slider->id; ?></td>
                          <td><?php echo $slider->nombre; ?></td>
                          <td><?php echo $slider->descripcion; ?></td>
                          <td><?php echo $slider->idStatus; ?></td>
                          <td><?php echo $slider->observaciones; ?></td>
                          <td><?php echo $slider->imagen; ?></td>
                          <td><?php echo $slider->fechaRegistro; ?></td>
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
                      <th>Observaciones</th>
                      <th>Imagen</th>
                      <th>Registro</th>
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
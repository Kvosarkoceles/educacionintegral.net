<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Cursos</h1>
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
                <h3 class="card-title">Cursos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombres</th>
                      <th>Subtitulo</th>
                      <th>Profesor</th>
                      <th>Popular</th>
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
                          <td><?php echo $curso->subtitulo; ?></td>
                          <td><?php echo $curso->profesor; ?></td>
                          <td>
                            <?php if ($curso->popular == 2) : ?>
                              Desactivado
                            <?php elseif ($curso->popular == 1) : ?>
                              Activado
                            <?php else : ?>
                              unknown
                            <?php endif; ?>
                          </td>
                          <td>
                            <?php if ($curso->idStatus == 2) : ?>
                              Desactivado
                            <?php elseif ($curso->idStatus == 1) : ?>
                              Activado
                            <?php else : ?>
                              unknown
                            <?php endif; ?>
                          </td>
                          <td><a href="<?php echo base_url(); ?>admin/cursos/cursos/view/<?php echo $curso->id; ?>">ver</a></td>
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
                      <th>Subtitulo</th>
                      <th>Profesor</th>
                      <th>Popular</th>
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
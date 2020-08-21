<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Noticias</h1>
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
                            <h3 class="card-title">Edita Noticias</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>titulo</th>
                      <th>autor</th>
                      <th>fecha</th>
                      <th>tag</th>
                      <th>idStatus</th>
                      <th>ver</th>
                      <th>editar</th>
                      <th>eliminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($noticias)) : ?>
                      <?php foreach ($noticias as $noticia) : ?>
                        <tr>
                          <td><?php echo $noticia->id; ?></td>
                          <td><?php echo $noticia->titulo; ?></td>
                          <td><?php echo $noticia->autor; ?></td>
                          <td><?php echo $noticia->fecha; ?></td>
                          <td><?php echo $noticia->tag; ?></td>
                          <td>
                            <?php if ($noticia->idStatus == 2) : ?>
                              Desactivado
                            <?php elseif ($noticia->idStatus == 1) : ?>
                              Activado
                            <?php else : ?>
                              unknown
                            <?php endif; ?>
                          </td>
                          <td><a href="<?php echo base_url(); ?>admin/noticias/noticias/view/<?php echo $noticia->id; ?>">ver</a></td>
                          <td><a href="<?php echo base_url(); ?>admin/noticias/noticias/edit/<?php echo $noticia->id; ?>">editar</a></td>
                          <td>eliminar</td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>titulo</th>
                      <th>autor</th>
                      <th>fecha</th>
                      <th>tag</th>
                      <th>idStatus</th>
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
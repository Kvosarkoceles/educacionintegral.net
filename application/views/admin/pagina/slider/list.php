<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard v3</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v3</li>
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
                <h3 class="card-title">Slider</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nombres</th>
                      <th>Slogan</th>
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
                          <td><?php echo $slider->slogan; ?></td>
                          <td><?php echo $slider->idStatus; ?></td>
                          <td><?php echo $slider->descripcion; ?></td>
                          <td><?php echo $slider->imagen; ?></td>
                           <td>
                           <a href="<?php echo base_url();?><?php echo $slider->imagen; ?>" target="_blank">Ver</a>
                           </td>
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
                      <th>Slogan</th>
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
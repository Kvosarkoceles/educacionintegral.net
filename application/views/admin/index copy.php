<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Administración</h1>

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
          <h2>activos=<?php echo $slidersActivos ?></h2>
        </div>
      </div>

      <!-- row -->
      <div class="row">
        <div class="col-12">
          <!-- jQuery Knob -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="far fa-chart-bar"></i>
                Activos
              </h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-6 col-md-3 text-center">
                  <input type="text" class="knob" value="1" data-width="90" data-height="90" data-fgColor="#3c8dbc">

                  <div class="knob-label">Sliders</div>
                </div>
                <!-- ./col -->
                <div class="col-6 col-md-3 text-center">
                  <input type="text" class="knob" value="70" data-width="90" data-height="90" data-fgColor="#f56954">

                  <div class="knob-label">Profesores</div>
                </div>
                <!-- ./col -->
                <div class="col-6 col-md-3 text-center">
                  <input type="text" class="knob" value="-80" data-min="-150" data-max="150" data-width="90" data-height="90" data-fgColor="#00a65a">

                  <div class="knob-label">Cursos</div>
                </div>
                <!-- ./col -->
                <div class="col-6 col-md-3 text-center">
                  <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef">

                  <div class="knob-label">Tags</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-6 text-center">
                  <input type="text" class="knob" value="90" data-width="90" data-height="90" data-fgColor="#932ab6">

                  <div class="knob-label">Noticias</div>
                </div>
                <!-- ./col -->
                <div class="col-6 text-center">
                  <input type="text" class="knob" value="50" data-width="90" data-height="90" data-fgColor="#39CCCC">

                  <div class="knob-label">Usuarios</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- row -->
      <div class="row">
        <div class="col-12">
          <!-- jQuery Knob -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="far fa-chart-bar"></i>
                Inactivos
              </h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-6 col-md-3 text-center">
                  <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc">

                  <div class="knob-label">Sliders</div>
                </div>
                <!-- ./col -->
                <div class="col-6 col-md-3 text-center">
                  <input type="text" class="knob" value="70" data-width="90" data-height="90" data-fgColor="#f56954">

                  <div class="knob-label">Profesores</div>
                </div>
                <!-- ./col -->
                <div class="col-6 col-md-3 text-center">
                  <input type="text" class="knob" value="-80" data-min="-150" data-max="150" data-width="90" data-height="90" data-fgColor="#00a65a">

                  <div class="knob-label">Cursos</div>
                </div>
                <!-- ./col -->
                <div class="col-6 col-md-3 text-center">
                  <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef">

                  <div class="knob-label">Tags</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <div class="col-6 text-center">
                  <input type="text" class="knob" value="90" data-width="90" data-height="90" data-fgColor="#932ab6">

                  <div class="knob-label">Noticias</div>
                </div>
                <!-- ./col -->
                <div class="col-6 text-center">
                  <input type="text" class="knob" value="50" data-width="90" data-height="90" data-fgColor="#39CCCC">

                  <div class="knob-label">Usuarios</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
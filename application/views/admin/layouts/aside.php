<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Integra</span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url(); ?><?php echo $this->session->userdata("avatar") ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?php echo base_url(); ?>admin/usuarios/configuracion/<?php echo $this->session->userdata("id") ?>" class="d-block"><?php echo $this->session->userdata("username") ?></a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-header">PAGINA</li>
            <!-- Pagina inicio -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Inicio
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Logo
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/pagina/logo/add" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>add</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Slider
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/pagina/slider/" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Lista</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/pagina/slider/add" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Add</p>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>

            <!-- Nosotros -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Nosotros
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      portada
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/pagina/nosotros/portada" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>add</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Contenido
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/pagina/nosotros" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Lista</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/pagina/nosotros/add" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Add</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <!-- Profesores -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Profesores
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      portada
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/profesores/profesores/portada" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>add</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Profesores
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/profesores/profesores/" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Lista</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/profesores/profesores/add" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Add</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <!-- Noticias -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Area Noticias
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      tags
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/noticias/tags" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>list</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/noticias/tags/add" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>add</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      noticias
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/noticias/noticias" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>list</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/noticias/noticias/add" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>add</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <!-- Cursos -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Cursos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      portada
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/cursos/cursos/portada" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>add</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Cursos
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/cursos/cursos/" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Lista</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>admin/cursos/cursos/add" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Add</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <!-- Servicios -->
             <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Servicios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>admin/pagina/servicios" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>admin/pagina/servicios/add" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">ADMINISTRACION</li>
            <!-- Usiarios -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-circle"></i>
                <p>
                  Usuarios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>admin/usuarios" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lista</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo base_url(); ?>admin/usuarios/add" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add</p>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Salir -->
            <li class="nav-item">
              <a href="<?php echo base_url(); ?>admin/auth/logout" class="nav-link">
                <i class="fas fa-circle nav-icon"></i>
                <p>SALIR</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
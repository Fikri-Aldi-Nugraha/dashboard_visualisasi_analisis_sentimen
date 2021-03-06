<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url()?>" class="brand-link">
      <img src="<?php echo base_url('aset/')?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Analisis Sentimen</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo base_url()?>" class="nav-link"> <i class="nav-icon fas fa-tachometer-alt"></i> <p> Dashboard </p> </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('datatrain')?>" class="nav-link"> <i class="nav-icon fas fa-table"></i> <p> Data Train </p> </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p> Hasil Klasifikasi <i class="fas fa-angle-left right"></i> <span class="badge badge-info right">2</span> </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('klasifikasi/pd')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Physical Distancing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('klasifikasi/sd')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Social Distancing</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
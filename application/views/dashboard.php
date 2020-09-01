<!DOCTYPE html>
<html>
<?php $this->load->view('aset/head')?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php $this->load->view('aset/nav')?>

  <!-- Main Sidebar Container -->
  <?php $this->load->view('aset/side_bar')?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark">Dashboard</h1> -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-12 col-sm-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Selamat datang di dashboard Analisis Sentimen</h3>

                <p>Pada dashboard ini akan ditampilkan hasil dari klasifikasi yang telah dilakukan menggunakan metode LSTM</p>
              </div>
            </div>
          </div>
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('aset/foot')?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<?php $this->load->view('aset/jquery')?>
</body>
</html>
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
            <h1 class="m-0 text-dark">Data Train</h1>
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
          <div class="col-lg-12 ">
            <!-- small box -->
            <div class="row">
            <div class="card">
              <div class="card-body">
              <table id="myTable" class="table table-striped table-advance table-hover">
              <thead>
                <tr>
                  <th><center>No</center></th>
                  <th><center>Tweet</center></th>
                  <th><center>Label</center></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach($train as $tra){?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $tra->tweet;?></td>
                  <td><?php echo $tra->label;?></td>
                </tr>
                <?php 
                }  ?>
              </tbody>
            </table>
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

<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>
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
            <h1 class="m-0 text-dark">Social Distancing</h1>
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
                <div class="col-md-2">
                
                </div>
                <div class="col-md-8">
                  <canvas id="data"></canvas>
                </div>
                <div class="col-md-2">
                  
                </div>
                
            </div>
            <br>
            <br>
            
            <div class="card">
              <div class="card-body">
              <table id="myTable" class="table table-striped table-advance table-hover">
              <thead>
                <tr>
                  <th><center>No</center></th>
                  <th><center>Screen Name</center></th>
                  <th><center>Create Date</center></th>
                  <th><center>Tweet</center></th>
                  <th><center>Sentimen</center></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach($data as $data){?>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $data->screen_name;?></td>
                  <td><?php echo $data->created_at;?></td>
                  <td><?php echo $data->tweet;?></td>
                  <td><?php echo $data->sentimen;?></td>
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
<style>
  canvas {
    -moz-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
  }
</style>
</body>
</html>

<script type="text/javascript">
  var color = Chart.helpers.color;
  <?php 
  $hasil = '';
  foreach($klasifikasi as $dp){
    $hasil .= "'".$dp->sentimen."',";
  }
  $hasil = substr($hasil, 0, -1);
  ?>
  var aset_data = {
    labels: [<?php echo $hasil;?>],
    datasets: [{
      label: 'Jumlah Data',
      backgroundColor: [color(window.chartColors.green).alpha(0.5).rgbString(), color(window.chartColors.red).alpha(0.5).rgbString()],
      borderColor: window.chartColors.blue,
      borderWidth: 1,
      data: ['<?php foreach($klasifikasi as $dp){
                echo $dp->total."','";
               }?>']
    }]
  };

  var data  = document.getElementById('data').getContext('2d');
  window.myBar = new Chart(data, {
    type: 'pie',
    data: aset_data,
    options: {
      responsive: true,
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Total Klasifikasi Social Distancing'
      }
    }
  });


  $(document).ready( function () {
    $('#myTable').DataTable();
  });
</script>
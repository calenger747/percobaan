<?php
  session_start();
  error_reporting(0);

  include('connection.php');
  if (!$_SESSION['level'] == "admin") {
    echo"<script>alert('Anda harus login terlebih dahulu !'); window.location.href = '/rusunawa/admin/login.php'</script>";
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin rusunawa </title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top" onload="updateDB();">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand" href="index_admin.php">Rusunawa</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <!-- <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div> -->
      </form>

        <div class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </div>

    </nav>

    <div id="wrapper">

      <?php include('sidebar.php'); ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a></a>
            </li>
            <li class="breadcrumb-item active">Selamat Datang Di Admin Rusunawa Depok</li>
          </ol>

          <?php include('nav-button.php'); ?>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  Unit Rusunawa
                </div>
                <div class="card-body">
                  <div id="container"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  Pendapatan Sewa
                </div>
                <div class="card-body">
                  <div id="container2"></div>
                </div>
              </div>
            </div>
          </div><br>
        </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © by Admin Rusunawa 2019</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- chart -->
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript">
      function updateDB(){
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "/rusunawa/proses-reject-booking.php", true);
        xhr.send(null);
        /* ignore result */
      }
    </script>

    <script type="text/javascript">
      <?php include('chart.php'); ?>
      var chart = Highcharts.chart('container2', {
        title:{
          text : 'Pendapatan sewa rusun bulan <?= $date = date("F Y"); ?>'
        },

      // subtitle : {
      //   text : 'plain'
      // },

      xAxis: {
        categories : ['Pendapatan Maksimal', 'Pendapatan Optimal', 'Realisasi Pendapatan', 'Pendapatan real', 'Pendapatan Tertunggak']
      },

      series: [{
        type: 'column',
        colorByPoint: true,
        name: 'Total',
        data: [<?= $total_max ?>, <?= $total_opt ?>, <?= $total_rep ?>, <?= $total_pre ?>, <?= $total_mng ?>],
        showInLegend: false
      }]
    });

     var chart2 = Highcharts.chart('container', {
        title:{
          text : 'Unit Rusunawa <?= $date = date("F Y"); ?>'
        },

      // subtitle : {
      //   text : 'plain'
      // },

      xAxis: {
        categories : ['Kapasitas Gedung', 'Unit Rusak Ringan', 'Unit Rusak Berat', 'Unit Terisi', 'Unit Kosong', 'Presentase']
      },

      series: [{
        type: 'column',
        colorByPoint: true,
        name: 'Total',
        data: [<?= $jum_kps ?>, <?= $jum_urs ?>, <?= $jum_urb ?>, <?= $jum_isi ?>, <?= $jum_ksg?>, <?= $persentase?>],
        showInLegend: false
      }]
    });

        $('#plain').click(function() {
          chart.update({
          chart: {
          inverted: false,
          polar: false
        },
          subtitle: {
            text: 'plain'
          }
        });
      });
  </script>

  </body>

</html>
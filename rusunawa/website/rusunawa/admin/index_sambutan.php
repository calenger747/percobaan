<?php
  session_start();
  if(!isset($_SESSION['username'])) {
    header('location:/rusunawa/admin/login.php');
  } else {
      $username = $_SESSION['username'];
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

    <title>admin rusunawa </title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index_admin.php">Rusunawa</a>

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
            <li class="breadcrumb-item active">Selamat Datang Di Rusunawa Depok</li>
          </ol>

          <?php include('nav-button.php'); ?>


              <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Data User</li>
          </ol>

          <div>
            <a href="add_sambutan.php" class="btn btn-info btn-lg btn-block">
          <span class="glyphicon glyphicon-plus">Add Update Sambutan</span>
        </a>
          </div>

          <form action="" method="get">
          <br/>
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Update Sambutan Kepala UPT.Rusunawa Depok</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Kepala UPT.Rusunawa</th>
                      <th>Kata Sambutan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php
                  include 'connection.php';
                  $query="SELECT*FROM update_sambutan";
                  $result=mysqli_query($conn,$query);
                  while ($data=mysqli_fetch_array($result)) {
                  echo "<tr align='center'>
                  <td>".$data['kode_sambutan']."</td>
                  <td><img src='images/".$data['gambar']."' width='100' height='100'></td>
                  <td>".$data['kata_sambutan']."</td>"; ?>
                  <td>
                      <li name="delete" class="btn btn btn-sm" value="delete" title="Hapus Data">
                      <a href="hapus_sambutan.php?id=<?php echo $data['kode_sambutan'];?>" onClick="return confirm('Anda Yakin Ingin Menghapus Data <?php echo $data['kode_sambutan'];?> ?')">
                           <i class="fas fa-trash"></i>
                      </li>
                      <li name="update" class="btn btn btn-sm" value="update" title="Edit Data">
                      <a href="form_update_sambutan.php?id=<?php echo $data['kode_sambutan'];?>">
                            <i class="fas fa-paperclip"></i>
                      </li>
                  </td>
                  <?php
                    }
                  ?>
                </table>
              </div>


            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

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
    <script type="text/javascript">
      function updateDB(){
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "/rusunawa/proses-reject-booking.php", true);
        xhr.send(null);
        /* ignore result */
      }
    </script>

  </body>

</html>

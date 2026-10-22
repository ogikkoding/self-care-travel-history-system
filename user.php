<?php
session_start();
if (empty($_SESSION['nik'])) { ?>
  <script type="text/javascript">
    window
    alert('SILAHKAN LOGIN KEMBALI!!');
    window.location.assign('index.php');
  </script>

<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PEDULI DIRI-user</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top ">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->

    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="user.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-heart" style="color:red;"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
          <font color="red"><b>PEDULI DIRI</b></font>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="user.php">
          <i class="fas fa-fw fa-home" style="color:black;"></i>
          <span>
            <font color="blue"><b>BERANDA</b></font>
          </span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <font color="black"><b>MENU</b></font>
      </div>


      <!--tulis catatan-->
      <li class="nav-item">
        <a class="nav-link" href="?url=tulis-catatan">
          <i class="fas fa-fw fa-pen" style="color:black;"></i>
          <span>
            <font color="blue"><b>TULIS CATATAN</b></font>
          </span></a>
      </li>

      <!--lihat catatan-->
      <li class="nav-item">
        <a class="nav-link" href="?url=lihat-catatan">
          <i class="fas fa-fw fa-eye" style="color:black;"></i>
          <span>
            <font color="blue"><b>LIHAT CATATAN</b></font>
          </span></a>
      </li>

      <!--lihat catatan-->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-fw fa-power-off" style="color:black;"></i>
          <span>
            <font color="blue"><b>KELUAR</b></font>
          </span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-3 static-top shadow">
          <h2>PEDULI DIRI</h2>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->

        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="h4 mb-4 text-gray-800">
            <?php
            if (!empty(@$_GET['url'])) {
              switch (@$_GET['url']) {
                case 'tulis-catatan';
                  include 'tulis-catatan.php';
                  break;

                case 'lihat-catatan';
                  include 'lihat-catatan.php';
                  break;

                default:
                  echo "<h3> halaman tidak ditemukan </h3>";
                  break;
              }
            } else {
              echo "<h3>Selamat datang di aplikasi Peduli Diri, platform untuk mencatat riwayat perjalanan Anda.</h3>";

              echo "<br>Anda login sebagai:";
              echo "<h4><b>" . htmlspecialchars($_SESSION['nama_lengkap']) . "</b></h4>";

              echo '
<div class="row mt-4">

    <div class="col-lg-4 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <h5 class="font-weight-bold text-primary">
                    <i class="fas fa-virus"></i> Kenali COVID-19
                </h5>
                <p>COVID-19 adalah penyakit menular yang disebabkan oleh virus SARS-CoV-2.
                Kenali gejalanya dan ikuti informasi kesehatan dari sumber tepercaya.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <h5 class="font-weight-bold text-success">
                    <i class="fas fa-hands-wash"></i> Pencegahan
                </h5>
                <p>Jaga kebersihan tangan, terapkan etika batuk,
                dan gunakan masker saat diperlukan untuk membantu
                mengurangi risiko penularan penyakit pernapasan.</p>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <h5 class="font-weight-bold text-warning">
                    <i class="fas fa-clipboard-list"></i> Catatan Perjalanan
                </h5>
                <p>Catat riwayat perjalanan secara jujur dan lengkap.
                Informasi ini dapat membantu penelusuran riwayat perjalanan
                ketika diperlukan.</p>
            </div>
        </div>
    </div>

</div>';
            }

            ?>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy;PEDULI DIRI 2030</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>


</body>

</html>
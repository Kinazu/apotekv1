<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Barang</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/dist/css/adminlte.min.css">
    <?php include '../../navbar.php'; ?>
</head>

<body class="hold-transition sidebar-mini dark-mode layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>DataTables</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="../../index3.html" class="brand-link elevation-4">
                    <img src="../../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">APOTEK SENYUM</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                        <div class="info">
                            <h4 href="#" class="d-block">Apoteker</h4>
                        </div>
                    </div>

                    <!-- SidebarSearch Form -->
                    <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                                aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-folder"></i>
                                    <p>
                                        Data
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../../index.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Barang</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../index2.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../index3.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Laporan
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../../index.html" class="nav-link">
                                            <i class="fa-solid fa-calendar-days "></i>
                                            <p>Harian
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Penjualan Harian</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index2.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Inventori Stok Barang</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../index.html" class="nav-link">
                                            <i class="fa-solid fa-calendar-week"></i>
                                            <p>Pekanan
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Penjualan Pekanan</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index2.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Inventori Stok Barang</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Pembelian</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../index.html" class="nav-link">
                                            <i class="fa-solid fa-calendar-month"></i>
                                            <p>Bulanan
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Penjualan Bulanan</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index2.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Inventori Stok Barang</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Pembelian</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Kinerja Karyawan</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Laba Rugi</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Narkotika dan Psikotropika</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Keuangan/Arus Kas</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../index.html" class="nav-link">
                                            <i class="fa-solid fa-calendar-"></i>
                                            <p>Tahunan
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Penjualan Tahunan</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index2.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Inventori Stok Barang</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Pembelian</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Kinerja Karyawan</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Laba Rugi</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>Keuangan/Arus Kas</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Barang
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../charts/chartjs.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>ChartJS</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../charts/flot.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Flot</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../charts/inline.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Inline</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../charts/uplot.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>uPlot</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Laporan
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../UI/general.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>General</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../UI/icons.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Icons</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../UI/buttons.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Buttons</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../UI/sliders.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Sliders</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../UI/modals.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Modals & Alerts</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../UI/navbar.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Navbar & Tabs</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../UI/timeline.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Timeline</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../UI/ribbons.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Ribbons</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Pengaturan
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../forms/general.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>General Elements</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../forms/advanced.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Advanced Elements</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../forms/editors.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Editors</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../forms/validation.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Validation</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Logout
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../tables/simple.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Simple Tables</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../tables/data.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>DataTables</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../tables/jsgrid.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>jsGrid</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-header">EXAMPLES</li>
                            <li class="nav-item">
                                <a href="../calendar.html" class="nav-link">
                                    <i class="nav-icon far fa-calendar-alt"></i>
                                    <p>
                                        Calendar
                                        <span class="badge badge-info right">2</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside> <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped" cellpadding="10"
                                        cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="center sorting">No</th>
                                                <th>Foto</th>
                                                <th>Nama </th>
                                                <th>Email</th>
                                                <th>No Telepon</th>
                                                <th>Alamat</th>
                                                <th>Jabatan</th>
                                                <th>Akses</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$no=0;

include '../../config/connect.php'; 

$sql = $conn->query("SELECT * FROM karyawan");
/*("SELECT 'apoteker', nama, email, foto, akses
FROM apoteker
UNION
SELECT 'karyawan', nama, email, foto, akses
FROM karyawan
UNION 
SELECT 'supplier', nama, email, foto, akses
FROM supplier 
UNION 
SELECT 'pelanggan', nama, email, foto, akses 
FROM pelanggan");*/
while ($data = $sql->fetch_assoc()) {
    $no++;
?>
                                            <tr>
                                                <td>
                                                    <?php echo $no?>
                                                </td>
                                                <td>
                                                    <img src="../../../assets/img/user/<?php echo $data ['foto']; ?>"
                                                        class="user-image" alt="User Image">
                                                </td>
                                                <td>
                                                    <?php echo $data['nama'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['email'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['telepon'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['alamat'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['jabatan'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['akses'] ; ?>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success">Edit</a>
                                                    <a href="../../logout.php" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <?php include '../../config/footer.php'; ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/jszip/jszip.min.js"></script>
    <script src="../../assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../assets/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
</body>

</html>
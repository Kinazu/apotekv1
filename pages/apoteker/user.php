<?php session_start(); 

        include '../../includes/connect.php';
        include '../../includes/head.php';
        ?>

<body class="hold-transition dark-mode layout-fixed layout-navbar-fixed layout-footer">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="../assets/img/logo.jpg" alt="Apotek Senyum" height="60" width="60">
        </div>

        <?php 
            include '../../includes/navbar.php'; 
            include '../../includes/sidebar.php';
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-1">
                        <div class="col-sm">
                            <h1>Tabel Data</h1>
                        </div>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../apoteker/view.php">Beranda</a></li>
                            <li class="breadcrumb-item active">Tabel Data</li>
                        </ol>
                        <div class="col-sm-1">
                            <a class="btn btn-info" href=" form.php">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
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
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>
                                        Beranda
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-folder"></i>
                                    <p>
                                        Data
                                        <i class="right fas fa-angle-left"></i>
                                        <span class="badge badge-info right"></span>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="../barang/data_barang.php" class="nav-link">
                                            <i class="fa-solid fa-box nav-icon"></i>
                                            <p>Data Barang</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../barang/penjualan.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Penjualan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../barang/pembelian.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Pembelian</p>
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
                                            <i class="fa-solid fa-calendar-days nav-icon"></i>
                                            <p>Harian
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-square-poll-vertical nav-icon"></i>
                                                    <p>Penjualan</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index2.html" class="nav-link">
                                                    <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                                                    <p>Inventori Stok Barang</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../index.html" class="nav-link">
                                            <i class="fa-solid fa-calendar-days nav-icon"> </i>
                                            <p>
                                                Pekanan
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-square-poll-vertical nav-icon"></i>
                                                    <p>Penjualan</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index2.html" class="nav-link">
                                                    <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                                                    <p>Inventori Stok Barang</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-cart-flatbed nav-icon"></i>
                                                    <p>Pembelian</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../index.html" class="nav-link">
                                            <i class="fa-solid fa-calendar-days nav-icon"></i>
                                            <p>Bulanan
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-square-poll-vertical nav-icon"></i>
                                                    <p>Penjualan</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index2.html" class="nav-link">
                                                    <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                                                    <p>Inventori Stok Barang</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-cart-flatbed nav-icon"></i>
                                                    <p>Pembelian</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-clipboard-user nav-icon"></i>
                                                    <p>Kinerja Karyawan</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-chart-column nav-icon"></i>
                                                    <p>Laba Rugi</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-prescription nav-icon"></i>
                                                    <p>Narkotika dan Psikotropika</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-money-check nav-icon"></i>
                                                    <p>Keuangan</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="../../index.html" class="nav-link">
                                            <i class="fa-solid fa-calendar-days nav-icon"></i>
                                            <p>Tahunan
                                                <i class="right fas fa-angle-left"></i>
                                            </p>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-square-poll-vertical nav-icon"></i>
                                                    <p>Penjualan</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index2.html" class="nav-link">
                                                    <i class="fa-solid fa-boxes-stacked nav-icon"></i>
                                                    <p>Inventori Stok Barang</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-cart-flatbed nav-icon"></i>
                                                    <p>Pembelian</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-clipboard-user nav-icon"></i>
                                                    <p>Kinerja Karyawan</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-chart-column nav-icon"></i>
                                                    <p>Laba Rugi</p>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../../index.html" class="nav-link">
                                                    <i class="fa-solid fa-money-check nav-icon"></i>
                                                    <p>Keuangan</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="../barang/stok.php" class="nav-link">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Kartu Stok
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="../barang/faktur_beli.php" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Faktur Pembelian
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">

                                <a href="user.php" class="nav-link">
                                    <i class="nav-icon fa-solid fa-users-viewfinder"></i>
                                    <p>
                                        Manajemen User
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Pengaturan
                                    </p>
                                </a>
                            </li>
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
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Data User</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class=" table-bordered table-striped" cellpadding="10"
                                        cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="center sorting">No</th>
                                                <th>Foto</th>
                                                <th>Nomor Induk</th>
                                                <th>Nama </th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>No Telepon</th>
                                                <th>Alamat</th>
                                                <th>Level</th>
                                                <th>Akses</th>
                                                <th>Created</th>
                                                <th>Updated</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$no=0;

include '../../includes/connect.php'; 

$sql = $conn->query(
"SELECT foto,noinduk, apoteker, email, password, telepon, alamat, tingkatan, user.akses, created, updated
FROM apoteker a
INNER JOIN akses user ON a.akses=user.id
UNION 
SELECT foto, nip, karyawan, email,  password, telepon, alamat, jabatan, user.akses, created, updated
FROM karyawan k
INNER JOIN akses user ON k.akses=user.id
UNION
SELECT foto, nrs, supplier, email, password, telepon, alamat, tipe, user.akses, created, updated
FROM supplier s
INNER JOIN akses user ON s.akses=user.id
UNION 
SELECT foto, nipl, pelanggan, email, password, telepon, alamat, tingkatan, user.akses, created, updated
FROM pelanggan p
INNER JOIN akses user ON p.akses=user.id");
while ($data = $sql->fetch_assoc()) {
    $no++;
?>
                                            <tr>
                                                <td>
                                                    <?php echo $no;?>
                                                </td>
                                                <td class="center">
                                                    <img class="img-user"
                                                        src="../../assets/img/user/<?php echo $data ['foto']; ?>"
                                                        alt="User Image" width="45">
                                                </td>
                                                <td>
                                                    <?php echo $data['noinduk'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['apoteker'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['email'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['password'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['telepon'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['alamat'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['tingkatan'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['akses'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['created'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['updated'] ; ?>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success">Edit</a>
                                                    <a href="../../logout.php" <?php echo $data ['email'] ; ?>
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
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
        <?php include '../../includes/footer.php'; ?>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

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
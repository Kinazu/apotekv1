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
                            <h1>Tabel Penjualan</h1>
                        </div>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../apoteker/view.php">Beranda</a></li>
                            <li class="breadcrumb-item active">Tabel Penjualan</li>
                        </ol>
                        <div class="col-sm-1">
                            <a class="btn btn-info" href=" form_jual.php">
                                <i class="fas fa-plus"></i> Tambah
                            </a>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">DataTable</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive">
                                    <table id="penjualan" name="penjualan" class="table-bordered table-striped"
                                        cellpadding="10" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="center sorting">No</th>
                                                <th>Tanggal</th>
                                                <th>ID Karyawan</th>
                                                <th>Nama Karyawan</th>
                                                <th>ID Pelanggan</th>
                                                <th>Nama Pelanggan</th>
                                                <th>ID Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th>Harga Jual</th>
                                                <th>Diskon</th>
                                                <th>Pajak</th>
                                                <th>Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
include '../../includes/connect.php'; 

$no = 0;
$sql = $conn->query("SELECT pj.tgl, k.nip, k.karyawan, pg.id, pg.pelanggan, b.kode, b.barang, pj.jumlah, pj.harga_jual, pj.diskon, pj.pajak, pj.total
FROM penjualan pj
INNER JOIN karyawan k ON pj.id_karyawan = k.id
INNER JOIN pelanggan pg ON pj.id_pelanggan= pg.id
INNER JOIN barang b ON pj.id_barang= b.kode");
while ($data = $sql->fetch_assoc()) {   
    $no++;
?>
                                            <tr>
                                                <td>
                                                    <?php echo $no; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['tgl'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['nip'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['karyawan'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['id'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['pelanggan'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['kode'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['barang'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['jumlah'] ; ?>
                                                </td>
                                                </td>
                                                <td>
                                                    <?php echo $data ['harga_jual'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['diskon'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['pajak'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['total'] ; ?>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success">Edit</a>
                                                    <a href="../../logout.php" class="btn btn-danger">Delete</a>
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
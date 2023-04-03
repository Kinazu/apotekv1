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
                            <h1>Tabel Faktur Pembelian</h1>
                        </div>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../apoteker/view.php">Beranda</a></li>
                            <li class="breadcrumb-item active">Tabel Faktur Pembelian</li>
                        </ol>
                        <div class="col-sm-1">
                            <a class="btn btn-info" href=" form_faktur.php">
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
                                    <table id="fakturbeli" name="fakturbeli" class=" table-bordered table-striped"
                                        cellpadding="10" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="center sorting">No</th>
                                                <th>ID Supplier</th>
                                                <th>Nama Supplier</th>
                                                <th>Tanggal</th>
                                                <th>Tanggal Input</th>
                                                <th>ID Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Satuan Barang</th>
                                                <th>Harga Satuan</th>
                                                <th>HNA PPN</th>
                                                <th>Diskon</th>
                                                <th>Batch</th>
                                                <th>Expired</th>
                                                <th>Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

$no = 0;
include '../../includes/connect.php'; 

$sql = $conn->query("SELECT sp.nrs, sp.supplier, fb.tgl, fb.tgl_input, b.kode, b.barang, s.satuan, fb.harga_satuan, fb.hna_ppn, fb.diskon, fb.batch, fb.expired, fb.total 
FROM fakturbeli fb
INNER JOIN supplier sp ON fb.nrs_supplier=sp.nrs
INNER JOIN barang b ON fb.kd_barang=b.kode
INNER JOIN satuan s ON fb.satuan_barang=s.kode");
while ($data = $sql->fetch_assoc()) {
$no++;
?>
                                            <tr>
                                                <td>
                                                    <?php echo $no; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['nrs'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['supplier'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['tgl'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['tgl_input'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['kode'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['barang'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['satuan'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['harga_satuan'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['hna_ppn'] ; ?>
                                                </td>
                                                </td>
                                                <td>
                                                    <?php echo $data ['diskon'] ; ?>
                                                </td>
                                                </td>
                                                <td>
                                                    <?php echo $data ['batch'] ; ?>
                                                </td>
                                                </td>
                                                <td>
                                                    <?php echo $data ['expired'] ; ?>
                                                </td>
                                                </td>
                                                <td>
                                                    <?php echo $data ['total'] ; ?>
                                                </td>
                                                <td>
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
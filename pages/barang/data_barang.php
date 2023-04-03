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
                            <h1>Tabel Barang</h1>
                        </div>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../apoteker/view.php">Beranda</a></li>
                            <li class="breadcrumb-item active">Tabel Barang</li>
                        </ol>
                        <div class="col-sm-1">
                            <a class="btn btn-info" href=" form.php">
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
                                    <table id="databarang" name="databarang" class="table-bordered table-striped"
                                        cellpadding="10" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="center sorting">No</th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Supplier</th>
                                                <th>Nama Generik</th>
                                                <th>Satuan</th>
                                                <th>kategori</th>
                                                <th>Golongan</th>
                                                <th>Bentuk</th>
                                                <th>Harga Beli</th>
                                                <th>Harga Jual</th>
                                                <th>Minimum</th>
                                                <th>Maximum</th>
                                                <th>Created</th>
                                                <th>Update</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

include '../../includes/connect.php'; 

$no = 0;
$sql = $conn->query("SELECT b.kode, b.barang, sp.supplier, b.generik, s.satuan, k.kategori, g.golongan, be.bentuk, b.beli, b.jual, b.minimum, b.maximum, b.created, b.update
FROM barang b 
INNER JOIN supplier sp ON b.id_supplier = sp.id
INNER JOIN satuan s ON b.satuan=s.kode
INNER JOIN kategori k ON b.kategori=k.kode
INNER JOIN golongan g ON b.golongan=g.kode
INNER JOIN bentuk be ON b.bentuk=be.kode;");
while ($data = $sql->fetch_assoc()) {
    $no++;
?>
                                            <tr>
                                                <td>
                                                    <?php echo $no ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['kode'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data['barang'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['supplier'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['generik'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['satuan'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['kategori'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['golongan'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['bentuk'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['beli'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['jual'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['minimum'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['maximum'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['created'] ; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data ['update'] ; ?>
                                                </td>
                                                <td>
                                                    <a href="edit.php" class="btn btn-success">Edit</a>
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
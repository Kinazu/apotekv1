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
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Form Faktur Pembelian</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../beranda/view.php">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="../barang/faktur_beli.php">Faktur Pembelian</a>
                                </li>
                                <li class="breadcrumb-item active">Form Faktur Pembelian</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- left column -->
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="col-sm-2 control-label">ID Supplier</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="idsupplier"
                                            name="idsupplier" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Nama Supplier</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="namasupplier"
                                            name="namasupplier" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Tanggal Faktur</label>
                                    <div class="col-sm-5">
                                        <input type="datetime-local" class="form-control form-control-sm" id="tglfaktur"
                                            name="tglfaktur" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Tanggal Input Barang</label>
                                    <div class="col-sm-5">
                                        <input type="datetime-local" class="form-control form-control-sm" id="tglinput"
                                            name="tglinput" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Kode Barang</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="kodebarang"
                                            name="kodebarang" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Nama Barang</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" id="namabarang"
                                            name="namabarang" placeholder="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Bentuk Barang</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control form-control-sm" id="bentuk"
                                            name="bentuk" placeholder="" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Harga Jual</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <input type="number" class="form-control form-control-sm" id="harga_jual"
                                                name="harga_jual" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Diskon</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <input type="number" class="form-control form-control-sm" id="diskon"
                                                name="diskon" placeholder="" required>
                                            <span class="input-group-addon">%</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Pajak</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <input type="number" class="form-control form-control-sm" id="pajak"
                                                name="pajak" placeholder="" required>
                                            <span class="input-group-addon">%</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Total Harga</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <input type="number" class="form-control form-control-sm" id="totalharga"
                                                name="totalharga" placeholder="" required>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="box-footer">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" class="btn btn-success btn-submit" name="simpan"
                                            value="Simpan">
                                        <a href="stok.php" class="btn btn-default btn-reset">Batal</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <hr>
                        </form>
                        <!-- /.card -->

                        <!-- REQUIRED SCRIPTS -->
                        <!-- jQuery -->
                        <script src="../../assets/plugins/jquery/jquery.min.js"></script>
                        <!-- Bootstrap -->
                        <script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                        <!-- overlayScrollbars -->
                        <script src="../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
                        </script>
                        <!-- AdminLTE App -->
                        <script src="../../assets/dist/js/adminlte.js"></script>

                        <!-- PAGE PLUGINS -->
                        <!-- jQuery Mapael -->
                        <script src="../../assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
                        <script src="../../assets/plugins/raphael/raphael.min.js"></script>
                        <script src="../../assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
                        <script src="../../assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
                        <!-- ChartJS -->
                        <script src="../../assets/plugins/chart.js/Chart.min.js"></script>

                        <!-- AdminLTE for demo purposes -->
                        <script src="../../assets/dist/js/demo.js"></script>
                        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                        <script src="../../assets/dist/js/pages/dashboard2.js"></script>
</body>

</html>
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
                            <h1> Edit Barang</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../beranda/view.php">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="../barang/data_barang.php">Tabel Barang</a></li>
                                <li class="breadcrumb-item active"> Edit Barang</li>
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
                        <form action="update.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Kode Barang</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" name="kodebarang"
                                            id="kodebarang" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Nama Barang</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" name="namabarang"
                                            id="namabarang" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Supplier</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" name="supplier"
                                            id="supplier" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Nama Generik</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control form-control-sm" name="generik"
                                            id="generik" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Satuan</label>
                                    <div class="col-sm-5">
                                        <select class="custom-select rounded-0" name="satuan" id="satuan">
                                            <option>Unit</option>
                                            <option>Buah</option>
                                            <option>Pasang</option>
                                            <option>Lembar</option>
                                            <option>Keping</option>
                                            <option>Batang</option>
                                            <option>Bungkus</option>
                                            <option>Potong</option>
                                            <option>Tablet</option>
                                            <option>Ekor</option>
                                            <option>Rim</option>
                                            <option>Karat</option>
                                            <option>Botol</option>
                                            <option>Butir</option>
                                            <option>Roll</option>
                                            <option>Dus</option>
                                            <option>Karung</option>
                                            <option>Koli</option>
                                            <option>Sak</option>
                                            <option>Bal</option>
                                            <option>Kaleng</option>
                                            <option>Set</option>
                                            <option>Slop</option>
                                            <option>Gulung</option>
                                            <option>Ton</option>
                                            <option>Kilogram</option>
                                            <option>Gram</option>
                                            <option>Magram</option>
                                            <option>Meter</option>
                                            <option>M2</option>
                                            <option>M3</option>
                                            <option>Inchi</option>
                                            <option>Cc</option>
                                            <option>Liter</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">kategori</label>
                                    <div class="col-sm-5">
                                        <select class="custom-select rounded-0" name="kategori" id="kategori">
                                            <option>Obat</option>
                                            <option>Alat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Golongan</label>
                                    <div class="col-sm-5">
                                        <select class="custom-select rounded-0" name="golongan" id="golongan">
                                            <option>Bebas</option>
                                            <option>Bebas Terbatas</option>
                                            <option>Herbal</option>
                                            <option>Keras</option>
                                            <option>Wajib Apotek</option>
                                            <option>Narkotika</option>
                                            <option>Psikotropika</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Bentuk</label>
                                    <div class="col-sm-5">
                                        <select class="custom-select rounded-0" name="bentuk" id="bentuk">
                                            <option>Tablet</option>
                                            <option>Kapsul</option>
                                            <option>Kaplet</option>
                                            <option>Pil</option>
                                            <option>Sirup</option>
                                            <option>Serbuk</option>
                                            <option>Oles</option>
                                            <option>Tetes</option>
                                            <option>Suppositoria</option>
                                            <option>Suspensi</option>
                                            <option>Larutan</option>
                                            <option>Elixir</option>
                                            <option>Emulsi</option>
                                            <option>Galenik</option>
                                            <option>Extrak</option>
                                            <option>Immunosera</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Harga Beli</label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp.</span>
                                            <input type="number" class="form-control form-control-sm" id="harga_beli"
                                                name="harga_beli" placeholder="" required>
                                        </div>
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
                                    <label for="col-sm-2 control-label">Minimum</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control form-control-sm" id="minimum"
                                            name="minimum" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Maximum</label>
                                    <div class="col-sm-5">
                                        <input type="number" class="form-control form-control-sm" id="maximum"
                                            name="maximum" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="col-sm-2 control-label">Updated</label>
                                    <div class="col-sm-5">
                                        <input type="date" class="form-control form-control-sm" id="updated"
                                            name="updated" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="box-footer">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" class="btn btn-primary btn-submit" name="edit" id="edit"
                                            value="Edit">
                                        <a href="data_barang.php" class="btn btn-default btn-reset">Batal</a>
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
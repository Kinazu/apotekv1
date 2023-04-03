        <?php 
        session_start(); 

        include '../../includes/connect.php';
        include '../../admin/includes/head.php';
        ?>

        <body class="hold-transition dark-mode layout-fixed layout-navbar-fixed layout-footer">
            <div class="wrapper">

                <!-- Preloader -->
                <div class="preloader flex-column justify-content-center align-items-center">
                    <img class="animation__wobble" src="../../assets/dist/img/logo.png" alt="Apotek Senyum" height="100"
                        width="100">
                </div>

                <?php 
            include '../../admin/includes/navbar.php'; 
            include '../../admin/includes/sidebar.php';
        ?>

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper" style="min-height: 703.2px;">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>Beranda</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item">Beranda</li>
                                    </ol>
                                </div>
                            </div>
                        </div><!-- /.container-fluid -->
                    </section>

                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <form action="exp_penjualan.php" method="POST">
                                        <table>
                                            <tr>
                                                <td><input type="hidden" name="date1" class="form-control"
                                                        value="<?= $date1; ?>"></td>
                                                <td><input type="hidden" name="date2" class="form-control"
                                                        value="<?= $date2; ?>"></td>
                                                <td><button type="submit" class="btn btn-success"><i
                                                            class="glyphicon glyphicon-save-file"></i> Export to
                                                        Excel</button></td>
                                                <td> &nbsp;</td>
                                                <td><a href="" onclick="window.print()" class="btn btn-default"><i
                                                            class="glyphicon glyphicon-print"></i> Cetak</a></td>
                                            </tr>
                                        </table>
                                    </form>
                                    <!-- Area chart -->
                                    <div class="card card-primary card-outline">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                <i class="far fa-chart-bar"></i>
                                                Penjualan
                                            </h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="area-chart" style="height: 338px;" class="full-width-chart"></div>
                                        </div>
                                        <!-- /.card-body-->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- ./wrapper -->

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

            <?php 
            include '../../admin/includes/footer.php';
            ?>
        </body>

        </html>
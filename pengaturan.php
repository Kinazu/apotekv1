<?php session_start(); 

include 'includes/connect.php';
include 'includes/head.php';
?>

<body class="hold-transition dark-mode layout-fixed layout-navbar-fixed layout-footer">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="../assets/img/logo.jpg" alt="Apotek Senyum" height="60" width="60">
        </div>

        <?php 
    include 'includes/navbar.php'; 
    include 'includes/sidebar.php';
?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard v2</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v2</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="card control-sidebar control-sidebar-dark">
                                <div class="card-header">
                                    <h5>Pengaturan</h5>
                                </div>
                                <div class="card-body">
                                    <div class="p-3 control-sidebar-content">
                                        <div class="mb-4">
                                            <input type="checkbox" value="1" class="mr-1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

                        <!-- ./wrapper -->

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
            </section>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>

    <?php 
    include 'includes/footer.php';
    ?>
</body>

</html>
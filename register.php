<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>

    <link rel="shortcut icon" href="assets/img/logo.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Apotek</b></a>
            <img src="assets/img/nama.png" alt="Logo" height="50" style="margin-top:-12px;">
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form class="form" action="verifikasi.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="name" required
                            value="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required
                            value="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="tel" name="telepon" id="telepon" class="form-control" placeholder="Nomor Telepon"
                            required value="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                            required value="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="rpasswrod" id="rpassword" class="form-control"
                            placeholder="Retype password" required value="">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select name="akses" id="akses" class="form-control" placeholder="" required value="">
                            <option value="pelanggan">Pelanggan</option>
                            <option value="karyawan">Karyawan</option>
                            <option value="apoteker">Apoteker</option>
                            <span class="fas fa-calendar"></span>
                            <?php  
                if ($data['foto']=="") { ?>
                            <img style="border:1px solid #eaeaea;border-radius:5px;" src="images/user/user-default.png"
                                width="128">
                            <?php
                }
                else { ?>
                            <img style="border:1px solid #eaeaea;border-radius:5px;"
                                src="images/user/<?php echo $data['foto']; ?>" width="128">
                            <?php
                }
                ?>
                    </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input type="file" name="foto" id="foto" class="form-control" placeholder="Upload Foto" required value="">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-image"></span>
                </div>
            </div>
        </div>

        <div class="input-group mb-3">
            <input type="date" name="calendar" id="calendar" class="form-control" placeholder="Calendar" required
                value="">
            <div class="input-group-append">
                <div class="input-group-calendar">
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <textarea name="alamat" id="alamat" rows="5" cols="10" class="form-control" placeholder="Alamat" required
                value="">
            </textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                <label for="agreeTerms">
                    I agree to the <a href="#">terms</a>
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
            <button type="submit" name="daftar" class="btn btn-primary btn-block">Daftar</button>
        </div>
        <!-- /.col -->
    </div>
    </form>

    <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Sign up using Google+
        </a>
    </div>

    <a href="index.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
    </div><!-- /.card -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>
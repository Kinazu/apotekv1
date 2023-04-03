<?php 
session_start(); 

include 'includes/connect.php';

if (isset($_SESSION['akses']) && $_SESSION['akses'] == 'apoteker' && isset($_SESSION['noinduk']))
 {
    header('Location:pages/apoteker/beranda.php');
    echo "<script>alert('Selamat Datang apoteker')</script>";
}elseif (isset($_SESSION['akses']) && $_SESSION['akses'] == 'karyawan' && isset($_SESSION['nip'])) {
        header('Location:pages/karyawan/beranda.php');
        echo "<script>alert('Selamat Datang karyawan')</script>";
    }elseif (isset($_SESSION['akses']) && $_SESSION['akses'] == 'supplier' && isset($_SESSION['nrs'])) {
        header('Location:pages/supplier/beranda.php');
        echo "<script>alert('Selamat Datang supplier')</script>";
    }elseif (isset($_SESSION['akses']) && $_SESSION['akses'] == 'pelanggan' && isset($_SESSION['nipl'])) {
        header('Location:index.php');
        echo "<script>alert('Selamat Datang Kembali')</script>";
    }else echo "<script>alert('Selamat Datang Di Apotek Senyum')</script>";
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body>
    <div class="page-wrapper">
        <?php include 'includes/header.php'; ?>

        <main class="main">
            <div class="intro-slider-container">
                <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                        "nav": false,
                        "responsive": {
                            "992": {
                                "nav": true
                            }
                        }
                    }'>
                    <div class="intro-slide" style="background-image: url(assets/images/slider/slide1.jpg);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="col-auto offset-lg-3 intro-col">
                                    <h3 class="intro-subtitle">Trade-In Offer</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Hemgenix<br>
                                        <span>
                                            <sup class="font-weight-light">from</sup>
                                            <span class="text-primary">$199<sup>,99</sup></span>
                                        </span>
                                    </h1><!-- End .intro-title -->

                                    <a href="category.php" class="btn btn-outline-primary-2">
                                        <span>Shop Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-auto offset-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(assets/images/slider/slide3.jpg);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="col-auto offset-lg-3 intro-col">
                                    <h3 class="intro-subtitle">Lipstik</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Guerlain KissKiss <br>Gold and Diamond
                                        <span>
                                            <sup class="font-weight-light line-through">$799,99</sup>
                                            <span class="text-primary">$589<sup>,99</sup></span>
                                        </span>
                                    </h1><!-- End .intro-title -->

                                    <a href="category.php" class="btn btn-outline-primary-2">
                                        <span>Shop Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-auto offset-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(assets/images/slider/slide2.jpg);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="col-auto offset-lg-3 intro-col">
                                    <h3 class="intro-subtitle">MAICO MA 42</h3>
                                    <!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">e3 <br>Diagnostics
                                        <span>
                                            <sup class="font-weight-light line-through">$240,00</sup>
                                            <span class="text-primary">$180<sup>,99</sup></span>
                                        </span>
                                    </h1><!-- End .intro-title -->

                                    <a href="category.php" class="btn btn-outline-primary-2">
                                        <span>Shop Now</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-auto offset-lg-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="mb-4"></div><!-- End .mb-2 -->

            <div class="container">
                <h2 class="title text-center mb-2">Kategori</h2><!-- End .title -->

                <div class="cat-blocks-container">
                    <div class="row">
                        <div class="col-6 col-sm-4 ">
                            <a href="category.php" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/products/obat/obat.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Obat Obatan</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4  -->

                        <div class="col-6 col-sm-4 ">
                            <a href="category.php" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/products/alatkesehatan/alatmedis.png"
                                            alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Alat Kesehatan</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4  -->

                        <div class="col-6 col-sm-4 ">
                            <a href="category.php" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="assets/images/products/kosmetik/kosmetik.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Kosmetik</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4  -->
                    </div><!-- End .col-sm-4  -->
                </div><!-- End .row -->
            </div><!-- End .cat-blocks-container -->
    </div><!-- End .container -->

    <div class="mb-2"></div><!-- End .mb-2 -->

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="banner banner-overlay">
                    <a href="#">
                        <img src="assets/images/banners/banner2.jpeg" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle text-white"><a href="#"></a></h4>
                        <!-- End .banner-subtitle -->
                        <h3 class="banner-title text-white"><a href="#"> <br>
                                <br><span>
                                </span></a></h3><!-- End .banner-title -->
                        <a href="#" class="banner-link"><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-lg-4 -->

            <div class="col-sm-6 col-lg-4 ">
                <div class="banner banner-overlay">
                    <a href="#">
                        <img src="assets/images/banners/banner5.jpeg" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle text-white"><a href="#"></a></h4>
                        <!-- End .banner-subtitle -->
                        <h3 class="banner-title text-white"><a href="#"> <br>
                                <br><span>
                                </span></a></h3><!-- End .banner-title -->
                        <a href="#" class="banner-link"><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-lg-4 -->

            <div class="col-sm-6 col-lg-4">
                <div class="banner banner-overlay">
                    <a href="#">
                        <img src="assets/images/banners/banner4.jpeg" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">
                            </a>
                        </h4><!-- End .banner-subtitle -->
                        <h3 class="banner-title text-white"><a href="#"> <br>

                                <br><span></span></a></h3><!-- End .banner-title -->
                        <a href="#" class="banner-link"> <i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-3"></div><!-- End .mb-3 -->

    <div class="bg-light pt-3 pb-5">
        <div class="container">
            <div class="heading heading-flex heading-border mb-3">
                <div class="heading-left">
                    <h2 class="title">Produk Terlaris</h2><!-- End .title -->
                </div><!-- End .heading-left -->

                <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="hot-all-link" data-toggle="tab" href="#hot-all-tab"
                                role="tab" aria-controls="hot-all-tab" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hot-obat-link" data-toggle="tab" href="#hot-obat-tab" role="tab"
                                aria-controls="hot-obat-tab" aria-selected="false">Obat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hot-kosmetik-link" data-toggle="tab" href="#hot-kosmetik-tab"
                                role="tab" aria-controls="hot-kosmetik-tab" aria-selected="false">Kosmetik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="hot-alat-link" data-toggle="tab" href="#hot-alat-tab" role="tab"
                                aria-controls="hot-alat-tab" aria-selected="false">Alat
                                Kesehatan</a>
                        </li>
                    </ul>
                </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="hot-all-tab" role="tabpanel"
                    aria-labelledby="hot-all-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.php">
                                    <img src="assets/images/products/obat/antangin.png" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                            to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                            to
                                            cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Obat Herbal</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.php">Antangin JRG</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">RP.30.000,00</span>
                                    <span class="old-price">RP.37.000,00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-top">Top</span>
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.php">
                                    <img src="assets/images/products/obat/paracetamol.png" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true"
                                    data-labels-short="true"></div>
                                <!-- End .product-countdown -->

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                            to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                            to
                                            cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Obat Bebas</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.php">Paracetamol</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Rp.46.000,00</span>
                                    <span class="old-price">Rp.65.000,00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.php">
                                    <img src="assets/images/products/kosmetik/lipstik.png" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                            to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                            to
                                            cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Kosmetik</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.php">Lipstik <br>frame
                                        charcoal</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Rp.340.000,00</span>
                                    <span class="old-price">Rp.460.000,00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 6 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="background: #93a6b0;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.php">
                                    <img src="assets/images/products/alatkesehatan/airpurifier.jpg" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                            to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                            to
                                            cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Alat Kesehatan</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.php">Air Purifier </a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Rp.750.000,00</span>
                                    <span class="old-price">Rp.1.240.000,00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="background: #93a6b0;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-top">Top</span>
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.php">
                                    <img src="assets/images/products/alatkesehatan/humidifier.png" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-countdown" data-until="+7h" data-format="HMS" data-relative="true"
                                    data-labels-short="true"></div>
                                <!-- End .product-countdown -->

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                            to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                            to
                                            cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Alat Kesehatan</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.php">Humidifier</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Rp.560.000,00</span>
                                    <span class="old-price">Rp.820.000,00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 10 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-new">New</span>
                                <a href="product.php">
                                    <img src="assets/images/products/alatkesehatan/termometer.png" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                            to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                            to
                                            cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Alat Kesehatan</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.php">TermoMeter</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    Rp.160.000,00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 12 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="hot-obat-tab" role="tabpanel" aria-labelledby="hot-obat-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.php">
                                    <img src="assets/images/products/obat/antangin.png" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                            to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                            to
                                            cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Obat Herbal</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.php">Antangin JRG</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">RP.30.000,00</span>
                                    <span class="old-price">RP.37.000,00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-top">Top</span>
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.php">
                                    <img src="assets/images/products/obat/paracetamol.png" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true"
                                    data-labels-short="true"></div>
                                <!-- End .product-countdown -->

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                            to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                            to
                                            cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Obat Bebas</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.php">Paracetamol</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Rp.46.000,00</span>
                                    <span class="old-price">Rp.65.000,00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="background: #ff887f;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="hot-kosmetik-tab" role="tabpanel"
                    aria-labelledby="hot-kosmetik-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.php">
                                    <img src="assets/images/products/kosmetik/lipstik.png" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                            to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                            to
                                            cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Kosmetik</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.php">Lipstik <br>frame
                                        charcoal</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Rp.340.000,00</span>
                                    <span class="old-price">Rp.460.000,00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 6 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="background: #93a6b0;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane p-0 fade" id="hot-alat-tab" role="tabpanel" aria-labelledby="hot-alat-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1280": {
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.php">
                                    <img src="assets/images/products/alatkesehatan/airpurifier.jpg" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                            to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                            to
                                            cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Alat Kesehatan</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.php">Air Purifier </a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Rp.750.000,00</span>
                                    <span class="old-price">Rp.1.240.000,00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color
                                            name</span></a>
                                    <a href="#" style="background: #93a6b0;"><span class="sr-only">Color
                                            name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-top">Top</span>
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.php">
                                    <img src="assets/images/products/alatkesehatan/humidifier.png" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-countdown" data-until="+7h" data-format="HMS" data-relative="true"
                                    data-labels-short="true"></div>
                                <!-- End .product-countdown -->

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                            to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                            to
                                            cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Alat Kesehatan</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.php">Humidifier</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">Rp.560.000,00</span>
                                    <span class="old-price">Rp.820.000,00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 10 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-new">New</span>
                                <a href="product.php">
                                    <img src="assets/images/products/alatkesehatan/termometer.png" alt="Product image"
                                        class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                            to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare"
                                        title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                        title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                            to
                                            cart</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Alat Kesehatan</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.php">TermoMeter</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    Rp.160.000,00
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 12 Reviews )</span>
                                </div><!-- End .rating-container -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .container -->
    </div><!-- End .bg-light pt-5 pb-5 -->

    <div class="mb-3"></div><!-- End .mb-3 -->

    <div class="container obat">
        <div class="heading heading-flex heading-border mb-3">
            <div class="heading-left">
                <h2 class="title">Obat</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="obat-new-link" data-toggle="tab" href="#obat-new-tab" role="tab"
                            aria-controls="obat-new-tab" aria-selected="true">New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="obat-featured-link" data-toggle="tab" href="#obat-featured-tab"
                            role="tab" aria-controls="obat-featured-tab" aria-selected="false">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="obat-best-link" data-toggle="tab" href="#obat-best-tab" role="tab"
                            aria-controls="obat-best-tab" aria-selected="false">Best Seller</a>
                    </li>
                </ul>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="obat-new-tab" role="tabpanel"
                aria-labelledby="obat-new-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/products/obat/antangin.png" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Obat Herbal</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Antangin JRG</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">RP.30.000,00</span>
                                <span class="old-price">RP.37.000,00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->


                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/products/obat/paracetamol.png" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true"
                                data-labels-short="true"></div>
                            <!-- End .product-countdown -->

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Obat Bebas</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Paracetamol</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">Rp.46.000,00</span>
                                <span class="old-price">Rp.65.000,00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-8.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Audio</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Bose - SoundLink Bluetooth
                                    Speaker</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $79.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-9.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Tablets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Apple - 11 Inch iPad Pro with
                                    Wi-Fi
                                    256GB </a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #edd2c8;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-10.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Cell Phone</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Google - Pixel 3 XL 128GB</a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$350.00</span>
                                <span class="old-price">Was $410.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="obat-featured-tab" role="tabpanel" aria-labelledby="obat-featured-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-9.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Tablets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Apple - 11 Inch iPad Pro with
                                    Wi-Fi
                                    256GB </a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #edd2c8;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-10.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Cell Phone</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Google - Pixel 3 XL 128GB</a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                                <span class="new-price">$350.00</span>
                                <span class="old-price">Was $410.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-8.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Audio</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Bose - SoundLink Bluetooth
                                    Speaker</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $79.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-7.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">MacBook Pro 13" Display, i5</a>
                            </h3><!-- End .product-title -->
                            <div class="product-price">
                                $1,199.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="obat-best-tab" role="tabpanel" aria-labelledby="obat-best-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/products/obat/antangin.png" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Obat Herbal</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Antangin JRG</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">RP.30.000,00</span>
                                <span class="old-price">RP.37.000,00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-top">Top</span>
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/products/obat/paracetamol.png" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true"
                                data-labels-short="true"></div>
                            <!-- End .product-countdown -->

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Obat Bebas</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Paracetamol</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">Rp.46.000,00</span>
                                <span class="old-price">Rp.65.000,00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-6.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Appliances</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Neato Robotics</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $399.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 12 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-10.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Cell Phone</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Google - Pixel 3 XL 128GB</a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                                <span class="new-price">$350.00</span>
                                <span class="old-price">Was $410.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-9.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Tablets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Apple - 11 Inch iPad Pro with
                                    Wi-Fi
                                    256GB </a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #edd2c8;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->

    <div class="mb-3"></div><!-- End .mb-3 -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner banner-overlay banner-overlay-light">
                    <a href="#">
                        <img src="assets/images/banners/banner1.jpeg" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle d-none d-sm-block"><a href="#"></a>
                        </h4>
                        <!-- End .banner-subtitle -->
                        <h3 class="banner-title"><a href="#"> <br> <br><span class="text-primary"></span></a></h3>
                        <!-- End .banner-title -->
                        <a href="#" class="banner-link banner-link-dark"> <i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-lg-6 -->

            <div class="col-lg-6">
                <div class="banner banner-overlay">
                    <a href="#">
                        <img src="assets/images/banners/banner4.jpeg" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle text-white  d-none d-sm-block"><a href="#">
                            </a>
                        </h4><!-- End .banner-subtitle -->
                        <h3 class="banner-title text-white"><a href="#"> <br>
                                <br><span></span></a></h3><!-- End .banner-title -->
                        <a href="#" class="banner-link"> <i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-1"></div><!-- End .mb-1 -->

    <div class="container kosmetik">
        <div class="heading heading-flex heading-border mb-3">
            <div class="heading-left">
                <h2 class="title">Kosmetik</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="kosmetik-new-link" data-toggle="tab" href="#kosmetik-new-tab"
                            role="tab" aria-controls="kosmetik-new-tab" aria-selected="true">New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="kosmetik-featured-link" data-toggle="tab" href="#kosmetik-featured-tab"
                            role="tab" aria-controls="kosmetik-featured-tab" aria-selected="false">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="kosmetik-best-link" data-toggle="tab" href="#kosmetik-best-tab"
                            role="tab" aria-controls="kosmetik-best-tab" aria-selected="false">Best Seller</a>
                    </li>
                </ul>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="kosmetik-new-tab" role="tabpanel"
                aria-labelledby="kosmetik-new-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/products/kosmetik/lipstik.png" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Kosmetik</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Lipstik <br>frame
                                    charcoal</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">Rp.340.000,00</span>
                                <span class="old-price">Rp.460.000,00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-12.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Sofas</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Roots Sofa Bed</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-13.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Lighting</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Carronade Large Suspension
                                    Lamp</a>
                            </h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$892.00</span>
                                <span class="old-price">Was $939.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-14.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Chairs</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Wingback Chair</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $210.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #999999;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #cc9999;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-15.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Chairs</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Flow Slim Armchair</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$737,00</span>
                                <span class="old-price">Was $820.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #877666;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="kosmetik-featured-tab" role="tabpanel"
                aria-labelledby="kosmetik-featured-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-13.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Lighting</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Carronade Large Suspension
                                    Lamp</a>
                            </h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$892.00</span>
                                <span class="old-price">Was $939.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-14.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Chairs</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Wingback Chair</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $210.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #999999;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #cc9999;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-11.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Tables</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Block Side Table/Trolley</a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $229.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 12 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-15.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Chairs</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Flow Slim Armchair</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$737,00</span>
                                <span class="old-price">Was $820.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #877666;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-12.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Sofas</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Roots Sofa Bed</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="kosmetik-best-tab" role="tabpanel" aria-labelledby="kosmetik-best-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-12.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Sofas</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Roots Sofa Bed</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-13.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Lighting</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Carronade Large Suspension
                                    Lamp</a>
                            </h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$892.00</span>
                                <span class="old-price">Was $939.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-14.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Chairs</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Wingback Chair</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $210.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #999999;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #cc9999;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-15.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Chairs</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Flow Slim Armchair</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$737,00</span>
                                <span class="old-price">Was $820.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #877666;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->

    <div class="mb-3"></div><!-- End .mb-3 -->

    <div class="container alat ">
        <div class="heading heading-flex heading-border mb-3">
            <div class="heading-left">
                <h2 class="title">Alat Kesehatan</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="alat-new-link" data-toggle="tab" href="#alat-new-tab" role="tab"
                            aria-controls="alat-new-tab" aria-selected="true">New</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="alat-featured-link" data-toggle="tab" href="#alat-featured-tab"
                            role="tab" aria-controls="alat-featured-tab" aria-selected="false">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="alat-best-link" data-toggle="tab" href="#alat-best-tab" role="tab"
                            aria-controls="alat-best-tab" aria-selected="false">Best Seller</a>
                    </li>
                </ul>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="alat-new-tab" role="tabpanel"
                aria-labelledby="alat-new-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product.php">
                                <img src="assets/images/products/alatkesehatan/airpurifier.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Alat Kesehatan</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Air Purifier </a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">Rp.750.000,00</span>
                                <span class="old-price">Rp.1.240.000,00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #93a6b0;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product.php">
                                <img src="assets/images/products/alatkesehatan/termometer.png" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Alat Kesehatan</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">TermoMeter</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                Rp.160.000,00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 12 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-18.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">T-Shirts</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Red stripe tie front shirt</a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $56.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-19.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Bags</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Triple compartment cross body
                                    bag</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $64.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #f1f1f1;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-20.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Shirts</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Oxford grandad shirt</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $44.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 3 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b8b8b8;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #ebebeb;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="alat-featured-tab" role="tabpanel" aria-labelledby="alat-featured-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-18.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">T-Shirts</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Red stripe tie front shirt</a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $56.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-19.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Bags</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Triple compartment cross body
                                    bag</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $64.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #f1f1f1;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-16.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Shoes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Beige faux suede runner
                                    trainers</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $64.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 12 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-20.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Shirts</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Oxford grandad shirt</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $44.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 3 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b8b8b8;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #ebebeb;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-17.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Accessories</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Black boucle check scarf</a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $36.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="alat-best-tab" role="tabpanel" aria-labelledby="alat-best-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1280": {
                                        "items":5,
                                        "nav": true
                                    }
                                }
                            }'>
                    <div class="product">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-17.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Accessories</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Black boucle check scarf</a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $36.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 10 Reviews )</span>
                            </div><!-- End .rating-container -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-20.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Shirts</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Oxford grandad shirt</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $44.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 3 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #b8b8b8;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #ebebeb;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-19.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Bags</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Triple compartment cross body
                                    bag</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $64.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #f1f1f1;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="assets/images/demos/demo-13/products/product-18.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add
                                        to
                                        wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare"
                                    title="Compare"><span>Compare</span></a>
                                <a href="popup/quickView.php" class="btn-product-icon btn-quickview"
                                    title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">T-Shirts</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product.php">Red stripe tie front shirt</a>
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                $56.00
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                    <!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #825a45;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->

    <div class="mb-3"></div><!-- End .mb-3 -->

    <div class="container">
        <h2 class="title title-border mb-5">Shop by Brands</h2><!-- End .title -->
        <div class="owl-carousel mb-5 owl-simple" data-toggle="owl" data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            },
                            "1280": {
                                "items":6,
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
            <a href="#" class="brand">
                <img src="assets/images/brands/1.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/2.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/3.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/4.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/5.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/6.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/7.png" alt="Brand Name">
            </a>
        </div><!-- End .owl-carousel -->
    </div><!-- End .container -->

    <div class="cta cta-horizontal cta-horizontal-box bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2xl-5col">
                    <h3 class="cta-title text-white">Join Our Newsletter</h3><!-- End .cta-title -->
                    <p class="cta-desc text-white">Subcribe to get information about products and coupons
                    </p>
                    <!-- End .cta-desc -->
                </div><!-- End .col-lg-5 -->

                <div class="col-3xl-5col">
                    <form action="#">
                        <div class="input-group">
                            <input type="email" class="form-control form-control-white"
                                placeholder="Enter your Email Address" aria-label="Email Adress" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-white-2" type="submit"><span>Subscribe</span><i
                                        class="icon-long-arrow-right"></i></button>
                            </div><!-- .End .input-group-append -->
                        </div><!-- .End .input-group -->
                    </form>
                </div><!-- End .col-lg-7 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cta -->

    <div class="blog-posts bg-light pt-4 pb-7">
        <div class="container">
            <h2 class="title">From Our Blog</h2><!-- End .title-lg text-center -->

            <div class="owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "items": 3,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "600": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                },
                                "1280": {
                                    "items":4,
                                    "nav": true, 
                                    "dots": false
                                }
                            }
                        }'>
                <article class="entry">
                    <figure class="entry-media">
                        <a href="single.php">
                            <img src="assets/images/demos/demo-13/blog/post-1.jpg" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-meta">
                            <a href="#">Nov 22, 2018</a>, 0 Comments
                        </div><!-- End .entry-meta -->

                        <h3 class="entry-title">
                            <a href="single.php">Sed adipiscing ornare.</a>
                        </h3><!-- End .entry-title -->

                        <div class="entry-content">
                            <p>Lorem ipsum dolor consectetuer adipiscing elit. Phasellus hendrerit.
                                Pelletesque
                                aliquet nibh ...</p>
                            <a href="single.php" class="read-more">Read More</a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <figure class="entry-media">
                        <a href="single.php">
                            <img src="assets/images/demos/demo-13/blog/post-2.jpg" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-meta">
                            <a href="#">Dec 12, 2018</a>, 0 Comments
                        </div><!-- End .entry-meta -->

                        <h3 class="entry-title">
                            <a href="single.php">Vivamus vestibulum ntulla.</a>
                        </h3><!-- End .entry-title -->

                        <div class="entry-content">
                            <p>Phasellus hendrerit. Pelletesque aliquet nibh necurna In nisi neque, aliquet
                                vel,
                                dapibus id ... </p>
                            <a href="single.php" class="read-more">Read More</a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <figure class="entry-media">
                        <a href="single.php">
                            <img src="assets/images/demos/demo-13/blog/post-3.jpg" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-meta">
                            <a href="#">Dec 19, 2018</a>, 2 Comments
                        </div><!-- End .entry-meta -->

                        <h3 class="entry-title">
                            <a href="single.php">Praesent placerat risus.</a>
                        </h3><!-- End .entry-title -->

                        <div class="entry-content">
                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo,
                                eget
                                blandit nunc ...</p>
                            <a href="single.php" class="read-more">Read More</a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <figure class="entry-media">
                        <a href="single.php">
                            <img src="assets/images/demos/demo-13/blog/post-4.jpg" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-meta">
                            <a href="#">Dec 19, 2018</a>, 2 Comments
                        </div><!-- End .entry-meta -->

                        <h3 class="entry-title">
                            <a href="single.php">Fusce pellentesque suscipit.</a>
                        </h3><!-- End .entry-title -->

                        <div class="entry-content">
                            <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus
                                metus
                                libero augue. </p>
                            <a href="single.php" class="read-more">Read More</a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->

                <article class="entry">
                    <figure class="entry-media">
                        <a href="single.php">
                            <img src="assets/images/demos/demo-13/blog/post-1.jpg" alt="image desc">
                        </a>
                    </figure><!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-meta">
                            <a href="#">Nov 22, 2018</a>, 0 Comments
                        </div><!-- End .entry-meta -->

                        <h3 class="entry-title">
                            <a href="single.php">Sed adipiscing ornare.</a>
                        </h3><!-- End .entry-title -->

                        <div class="entry-content">
                            <p>Lorem ipsum dolor consectetuer adipiscing elit. Phasellus hendrerit.
                                Pelletesque
                                aliquet nibh ...</p>
                            <a href="single.php" class="read-more">Read More</a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .blog-posts -->
    </main><!-- End .main -->

    <?php include 'includes/footer.php'; ?>
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <?php 
    include 'includes/footer.php'; 
    include 'includes/sigin.php';
    include 'includes/popup.php'; ?>
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-13.js"></script>
</body>

</html>
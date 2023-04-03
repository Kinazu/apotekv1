<?php 

include 'connect.php';


//Ada User
if (isset($_SESSION['akses']) && $_SESSION['akses'] == 'pelanggan' && isset($_SESSION['nipl'])) {
    $nipl = $_SESSION['nipl']; 
    $sql = $conn->query("SELECT * FROM pelanggan p INNER JOIN akses ak ON p.akses=ak.akses WHERE nipl='$nipl'");

    while ($data = $sql->fetch_assoc()) { ?>
<header class="header header-10 header-intro-clearance sticky-header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
            </div><!-- End .header-left -->

            <div class="header-right">

                <ul class="top-menu">
                    <li>
                        <a href="#">Links</a>
                        <ul>
                            <li>
                                <a href="about.php">Tentang Apotek</a>
                            </li>
                            <li>
                                <div class="header-dropdown">
                                    <a href="#">USD</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">Eur</a></li>
                                            <li><a href="#">Usd</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div><!-- End .header-dropdown -->
                            </li>
                            <li>
                                <div class="header-dropdown">
                                    <a href="#">Engligh</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Spanish</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div><!-- End .header-dropdown -->
                            </li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="index.php" class="logo">
                    <img src="assets/dist/img/logo.png" alt="Apotek Logo" width="105" height="25">
                </a>
            </div><!-- End .header-left -->

            <div class="header-center">
                <div
                    class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <div class="select-custom">
                                <select id="cat" name="cat">
                                    <option value="">All Departments</option>
                                    <option value="1">Fashion</option>
                                    <option value="2">- Women</option>
                                    <option value="3">- Men</option>
                                    <option value="4">- Jewellery</option>
                                    <option value="5">- Kids Fashion</option>
                                    <option value="6">Electronics</option>
                                    <option value="7">- Smart TVs</option>
                                    <option value="8">- Cameras</option>
                                    <option value="9">- Games</option>
                                    <option value="10">Home &amp; Garden</option>
                                    <option value="11">Motors</option>
                                    <option value="12">- Cars and Trucks</option>
                                    <option value="15">- Boats</option>
                                    <option value="16">- Auto Tools &amp; Supplies</option>
                                </select>
                            </div><!-- End .select-custom -->
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..."
                                required>
                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div>

            <div class="header-right">
                <div class="header-dropdown-link">
                    <div class="dropdown compare-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" data-display="static" title="Compare Products"
                            aria-label="Compare Products">
                            <i class="icon-random"></i>
                            <span class="compare-txt">Compare</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="compare-products">
                                <li class="compare-product">
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    <h4 class="compare-product-title"><a href="product.php">Blue Night
                                            Dress</a></h4>
                                </li>
                                <li class="compare-product">
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    <h4 class="compare-product-title"><a href="product.php">White Long
                                            Skirt</a></h4>
                                </li>
                            </ul>

                            <div class="compare-actions">
                                <a href="#" class="action-link">Clear All</a>
                                <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i
                                        class="icon-long-arrow-right"></i></a>
                            </div>
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .compare-dropdown -->



                    <a href="wishlist.php" class="wishlist-link">
                        <i class="icon-heart-o"></i>
                        <span class="wishlist-count">3</span>
                        <span class="wishlist-txt">Wishlist</span>
                    </a>

                    <div class="dropdown cart-dropdown">
                        <a href="cart.php" class="dropdown-toggle" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count">2</span>
                            <span class="cart-txt">Cart</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="product.php">Beige knitted elastic runner shoes</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $84.00
                                        </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->

                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="product.php">Blue utility pinafore denim dress</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $76.00
                                        </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->
                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price">$160.00</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="cart.php" class="btn btn-primary">View Cart</a>
                                <a href="checkout.php" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .cart-dropdown -->
                    <div class="account">
                        <a href="dashboard.php" title="My account">
                            <img src="assets/dist/img/user/<?php echo $data['foto']; ?>">
                            <p class="hidden-xs" style="margin-top:7px"><?php echo $data['pelanggan']; ?></p>
                        </a>
                    </div><!-- End .compare-dropdown -->
                </div>
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom">
        <div class="container">
            <div class="header-left">
                <div class="dropdown category-dropdown show is-on" data-visible="false">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true" data-display="static" title="Category ">
                        Category
                    </a>

                    <div class="dropdown-menu">
                        <nav class="side-nav">
                            <ul class="menu-vertical sf-arrows">
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Obat</a>

                                    <div class="megamenu">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Batuk, Pilek & Flu
                                                            </div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Batuk & Flu</a></li>
                                                                <li><a href="#">Batuk Berdahak</a></li>
                                                                <li><a href="#">Untuk Bayi & Anak</a></li>
                                                                <li><a href="#">Nasal Spray & Dekongestan</a></li>
                                                                <li><a href="#">Balsem & Minyak Esensial</a></li>
                                                            </ul>

                                                            <div class="menu-title">Demam & Nyeri</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Peredam Demam & Nyeri</a></li>
                                                                <li><a href="#">Terapi Panas & Dingin</a></li>
                                                                <li><a href="#">Untuk Bayi & Anak</a></li>
                                                                <li><a href="#">Perawatan Herbal</a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Masalah Pencernaan</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Asam Lambung & GERD</a></li>
                                                                <li><a href="#">Diare</a></li>
                                                                <li><a href="#">Sembelit & Wasir</a></li>
                                                                <li><a href="#">Mual & Muntah </a></li>
                                                                <li><a href="#">Infeksi Cacing</a></li>
                                                            </ul>

                                                            <div class="menu-title">Alergi</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Obat Alergi</a></li>
                                                                <li><a href="#">Pereda Gatal</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.php" class="banner banner-menu">
                                                        <img src="assets/images/demos/demo-13/menu/banner-1.jpg"
                                                            alt="Banner">
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Furniture</a>

                                    <div class="megamenu">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Bedroom</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Beds, Frames & Bases</a>
                                                                </li>
                                                                <li><a href="#">Dressers</a></li>
                                                                <li><a href="#">Nightstands</a></li>
                                                                <li><a href="#">Kids' Beds & Headboards</a>
                                                                </li>
                                                                <li><a href="#">Armoires</a></li>
                                                            </ul>

                                                            <div class="menu-title">Living Room</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Coffee Tables</a></li>
                                                                <li><a href="#">Chairs</a></li>
                                                                <li><a href="#">Tables</a></li>
                                                                <li><a href="#">Futons & Sofa Beds</a></li>
                                                                <li><a href="#">Cabinets & Chests</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Office</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Office Chairs</a></li>
                                                                <li><a href="#">Desks</a></li>
                                                                <li><a href="#">Bookcases</a></li>
                                                                <li><a href="#">File Cabinets</a></li>
                                                                <li><a href="#">Breakroom Tables</a></li>
                                                            </ul>

                                                            <div class="menu-title">Kitchen & Dining</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Dining Sets</a></li>
                                                                <li><a href="#">Kitchen Storage Cabinets</a>
                                                                </li>
                                                                <li><a href="#">Bakers Racks</a></li>
                                                                <li><a href="#">Dining Chairs</a></li>
                                                                <li><a href="#">Dining Room Tables</a></li>
                                                                <li><a href="#">Bar Stools</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.php" class="banner banner-menu">
                                                        <img src="assets/images/demos/demo-13/menu/banner-2.jpg"
                                                            alt="Banner">
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Cooking</a>

                                    <div class="megamenu">
                                        <div class="menu-col">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="menu-title">Cookware</div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="#">Cookware Sets</a></li>
                                                        <li><a href="#">Pans, Griddles & Woks</a></li>
                                                        <li><a href="#">Pots</a></li>
                                                        <li><a href="#">Skillets & Grill Pans</a></li>
                                                        <li><a href="#">Kettles</a></li>
                                                        <li><a href="#">Soup & Stockpots</a></li>
                                                    </ul>
                                                </div><!-- End .col-md-4 -->

                                                <div class="col-md-4">
                                                    <div class="menu-title">Dinnerware & Tabletop</div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="#">Plates</a></li>
                                                        <li><a href="#">Cups & Mugs</a></li>
                                                        <li><a href="#">Trays & Platters</a></li>
                                                        <li><a href="#">Coffee & Tea Serving</a></li>
                                                        <li><a href="#">Salt & Pepper Shaker</a></li>
                                                    </ul>
                                                </div><!-- End .col-md-4 -->

                                                <div class="col-md-4">
                                                    <div class="menu-title">Cooking Appliances</div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="#">Microwaves</a></li>
                                                        <li><a href="#">Coffee Makers</a></li>
                                                        <li><a href="#">Mixers & Attachments</a></li>
                                                        <li><a href="#">Slow Cookers</a></li>
                                                        <li><a href="#">Air Fryers</a></li>
                                                        <li><a href="#">Toasters & Ovens</a></li>
                                                    </ul>
                                                </div><!-- End .col-md-4 -->
                                            </div><!-- End .row -->

                                            <div class="row menu-banners">
                                                <div class="col-md-4">
                                                    <div class="banner">
                                                        <a href="#">
                                                            <img src="assets/images/demos/demo-13/menu/1.jpg"
                                                                alt="image">
                                                        </a>
                                                    </div><!-- End .banner -->
                                                </div><!-- End .col-md-4 -->

                                                <div class="col-md-4">
                                                    <div class="banner">
                                                        <a href="#">
                                                            <img src="assets/images/demos/demo-13/menu/2.jpg"
                                                                alt="image">
                                                        </a>
                                                    </div><!-- End .banner -->
                                                </div><!-- End .col-md-4 -->

                                                <div class="col-md-4">
                                                    <div class="banner">
                                                        <a href="#">
                                                            <img src="assets/images/demos/demo-13/menu/3.jpg"
                                                                alt="image">
                                                        </a>
                                                    </div><!-- End .banner -->
                                                </div><!-- End .col-md-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Clothing</a>

                                    <div class="megamenu">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Women</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#"><strong>New
                                                                            Arrivals</strong></a></li>
                                                                <li><a href="#"><strong>Best
                                                                            Sellers</strong></a></li>
                                                                <li><a href="#"><strong>Trending</strong></a>
                                                                </li>
                                                                <li><a href="#">Clothing</a></li>
                                                                <li><a href="#">Shoes</a></li>
                                                                <li><a href="#">Bags</a></li>
                                                                <li><a href="#">Accessories</a></li>
                                                                <li><a href="#">Jewlery & Watches</a></li>
                                                                <li><a href="#"><strong>Sale</strong></a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Men</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#"><strong>New
                                                                            Arrivals</strong></a></li>
                                                                <li><a href="#"><strong>Best
                                                                            Sellers</strong></a></li>
                                                                <li><a href="#"><strong>Trending</strong></a>
                                                                </li>
                                                                <li><a href="#">Clothing</a></li>
                                                                <li><a href="#">Shoes</a></li>
                                                                <li><a href="#">Bags</a></li>
                                                                <li><a href="#">Accessories</a></li>
                                                                <li><a href="#">Jewlery & Watches</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.php" class="banner banner-menu">
                                                        <img src="assets/images/demos/demo-13/menu/banner-3.jpg"
                                                            alt="Banner">
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->

                                        <div class="menu-col menu-brands">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <a href="#" class="brand">
                                                        <img src="assets/images/brands/1.png" alt="Brand Name">
                                                    </a>
                                                </div><!-- End .col-lg-2 -->

                                                <div class="col-lg-2">
                                                    <a href="#" class="brand">
                                                        <img src="assets/images/brands/2.png" alt="Brand Name">
                                                    </a>
                                                </div><!-- End .col-lg-2 -->

                                                <div class="col-lg-2">
                                                    <a href="#" class="brand">
                                                        <img src="assets/images/brands/3.png" alt="Brand Name">
                                                    </a>
                                                </div><!-- End .col-lg-2 -->

                                                <div class="col-lg-2">
                                                    <a href="#" class="brand">
                                                        <img src="assets/images/brands/4.png" alt="Brand Name">
                                                    </a>
                                                </div><!-- End .col-lg-2 -->

                                                <div class="col-lg-2">
                                                    <a href="#" class="brand">
                                                        <img src="assets/images/brands/5.png" alt="Brand Name">
                                                    </a>
                                                </div><!-- End .col-lg-2 -->

                                                <div class="col-lg-2">
                                                    <a href="#" class="brand">
                                                        <img src="assets/images/brands/6.png" alt="Brand Name">
                                                    </a>
                                                </div><!-- End .col-lg-2 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .menu-brands -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li><a href="#">Home Appliances</a></li>
                                <li><a href="#">Healthy & Beauty</a></li>
                                <li><a href="#">Shoes & Boots</a></li>
                                <li><a href="#">Travel & Outdoor</a></li>
                                <li><a href="#">Smart Phones</a></li>
                                <li><a href="#">TV & Audio</a></li>
                                <li><a href="#">Gift Ideas</a></li>
                            </ul><!-- End .menu-vertical -->
                        </nav><!-- End .side-nav -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .category-dropdown -->
            </div><!-- End .col-lg-3 -->
            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container active">
                            <a href="index.php" class="sf-with-ul">Promo</a>

                            <div class="megamenu demo">
                                <div class="menu-col">
                                    <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                    <div class="demo-list">
                                        <div class="demo-item">
                                            <a href="index-1.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/1.jpg);"></span>
                                                <span class="demo-title">01 - furniture store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item">
                                            <a href="index-2.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/2.jpg);"></span>
                                                <span class="demo-title">02 - furniture store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item">
                                            <a href="index-3.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/3.jpg);"></span>
                                                <span class="demo-title">03 - electronic store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item">
                                            <a href="index-4.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/4.jpg);"></span>
                                                <span class="demo-title">04 - electronic store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item">
                                            <a href="index-5.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/5.jpg);"></span>
                                                <span class="demo-title">05 - fashion store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item">
                                            <a href="index-6.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/6.jpg);"></span>
                                                <span class="demo-title">06 - fashion store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item">
                                            <a href="index-7.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/7.jpg);"></span>
                                                <span class="demo-title">07 - fashion store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item">
                                            <a href="index-8.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/8.jpg);"></span>
                                                <span class="demo-title">08 - fashion store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item">
                                            <a href="index-9.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/9.jpg);"></span>
                                                <span class="demo-title">09 - fashion store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item">
                                            <a href="index-10.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/10.jpg);"></span>
                                                <span class="demo-title">10 - shoes store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-11.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/11.jpg);"></span>
                                                <span class="demo-title">11 - furniture simple store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-12.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/12.jpg);"></span>
                                                <span class="demo-title">12 - fashion simple store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-13.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/13.jpg);"></span>
                                                <span class="demo-title">13 - market</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-14.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/14.jpg);"></span>
                                                <span class="demo-title">14 - market fullwidth</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-15.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/15.jpg);"></span>
                                                <span class="demo-title">15 - lookbook 1</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-16.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/16.jpg);"></span>
                                                <span class="demo-title">16 - lookbook 2</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-17.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/17.jpg);"></span>
                                                <span class="demo-title">17 - fashion store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-18.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/18.jpg);"></span>
                                                <span class="demo-title">18 - fashion store (with
                                                    sidebar)</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-19.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/19.jpg);"></span>
                                                <span class="demo-title">19 - games store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-20.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/20.jpg);"></span>
                                                <span class="demo-title">20 - book store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-21.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/21.jpg);"></span>
                                                <span class="demo-title">21 - sport store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-22.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/22.jpg);"></span>
                                                <span class="demo-title">22 - tools store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-23.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/23.jpg);"></span>
                                                <span class="demo-title">23 - fashion left navigation
                                                    store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                        <div class="demo-item hidden">
                                            <a href="index-24.php">
                                                <span class="demo-bg"
                                                    style="background-image: url(assets/images/menu/demos/24.jpg);"></span>
                                                <span class="demo-title">24 - extreme sport store</span>
                                            </a>
                                        </div><!-- End .demo-item -->

                                    </div><!-- End .demo-list -->

                                    <div class="megamenu-action text-center">
                                        <a href="#" class="btn btn-outline-primary-2 view-all-demos"><span>View
                                                All Demos</span><i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .text-center -->
                                </div><!-- End .menu-col -->
                            </div><!-- End .megamenu -->
                        </li>
                        <li>
                            <a href="category.php" class="sf-with-ul">Obat Langka</a>

                            <div class="megamenu megamenu-md">
                                <div class="row no-gutters">
                                    <div class="col-md-8">
                                        <div class="menu-col">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="menu-title">Shop with sidebar</div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="category-list.php">Shop List</a></li>
                                                        <li><a href="category-2cols.php">Shop Grid 2
                                                                Columns</a></li>
                                                        <li><a href="category.php">Shop Grid 3 Columns</a>
                                                        </li>
                                                        <li><a href="category-4cols.php">Shop Grid 4
                                                                Columns</a></li>
                                                        <li><a href="category-market.php"><span>Shop
                                                                    Market<span
                                                                        class="tip tip-new">New</span></span></a>
                                                        </li>
                                                    </ul>

                                                    <div class="menu-title">Shop no sidebar</div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="category-boxed.php"><span>Shop Boxed
                                                                    No
                                                                    Sidebar<span
                                                                        class="tip tip-hot">Hot</span></span></a>
                                                        </li>
                                                        <li><a href="category-fullwidth.php">Shop Fullwidth
                                                                No
                                                                Sidebar</a></li>
                                                    </ul>
                                                </div><!-- End .col-md-6 -->

                                                <div class="col-md-6">
                                                    <div class="menu-title">Product Category</div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="product-category-boxed.php">Product
                                                                Category Boxed</a></li>
                                                        <li><a href="product-category-fullwidth.php"><span>Product
                                                                    Category Fullwidth<span
                                                                        class="tip tip-new">New</span></span></a>
                                                        </li>
                                                    </ul>
                                                    <div class="menu-title">Shop Pages</div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="cart.php">Cart</a></li>
                                                        <li><a href="checkout.php">Checkout</a></li>
                                                        <li><a href="wishlist.php">Wishlist</a></li>
                                                        <li><a href="dashboard.php">My Account</a></li>
                                                        <li><a href="#">Lookbook</a></li>
                                                    </ul>
                                                </div><!-- End .col-md-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .col-md-8 -->

                                    <div class="col-md-4">
                                        <div class="banner banner-overlay">
                                            <a href="category.php" class="banner banner-menu">
                                                <img src="assets/images/menu/banner-1.jpg" alt="Banner">

                                                <div class="banner-content banner-content-top">
                                                    <div class="banner-title text-white">Last
                                                        <br>Chance<br><span><strong>Sale</strong></span>
                                                    </div>
                                                    <!-- End .banner-title -->
                                                </div><!-- End .banner-content -->
                                            </a>
                                        </div><!-- End .banner banner-overlay -->
                                    </div><!-- End .col-md-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu megamenu-md -->
                        </li>
                        <li>
                            <a href="product.php" class="sf-with-ul">Obat Generik</a>

                            <div class="megamenu megamenu-sm">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="menu-col">
                                            <div class="menu-title">Product Details</div>
                                            <!-- End .menu-title -->
                                            <ul>
                                                <li><a href="product.php">Default</a></li>
                                                <li><a href="product-centered.php">Centered</a></li>
                                                <li><a href="product-extended.php"><span>Extended Info<span
                                                                class="tip tip-new">New</span></span></a>
                                                </li>
                                                <li><a href="product-gallery.php">Gallery</a></li>
                                                <li><a href="product-sticky.php">Sticky Info</a></li>
                                                <li><a href="product-sidebar.php">Boxed With Sidebar</a>
                                                </li>
                                                <li><a href="product-fullwidth.php">Full Width</a></li>
                                                <li><a href="product-masonry.php">Masonry Sticky Info</a>
                                                </li>
                                            </ul>
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="banner banner-overlay">
                                            <a href="category.php">
                                                <img src="assets/images/menu/banner-2.jpg" alt="Banner">

                                                <div class="banner-content banner-content-bottom">
                                                    <div class="banner-title text-white">New
                                                        Trends<br><span><strong>spring 2019</strong></span>
                                                    </div><!-- End .banner-title -->
                                                </div><!-- End .banner-content -->
                                            </a>
                                        </div><!-- End .banner -->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu megamenu-sm -->
                        </li>
                        <li>
                            <a href="#" class="sf-with-ul">Herbal</a>

                            <ul>
                                <li>
                                    <a href="about.php" class="sf-with-ul">About</a>

                                    <ul>
                                        <li><a href="about.php">About 01</a></li>
                                        <li><a href="about-2.php">About 02</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.php" class="sf-with-ul">Contact</a>

                                    <ul>
                                        <li><a href="contact.php">Contact 01</a></li>
                                        <li><a href="contact-2.php">Contact 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="faq.php">FAQs</a></li>
                                <li><a href="404.php">Error 404</a></li>
                                <li><a href="coming-soon.php">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blog.php" class="sf-with-ul">Alat Kesehatan</a>

                            <ul>
                                <li><a href="blog.php">Classic</a></li>
                                <li><a href="blog-listing.php">Listing</a></li>
                                <li>
                                    <a href="#">Grid</a>
                                    <ul>
                                        <li><a href="blog-grid-2cols.php">Grid 2 columns</a></li>
                                        <li><a href="blog-grid-3cols.php">Grid 3 columns</a></li>
                                        <li><a href="blog-grid-4cols.php">Grid 4 columns</a></li>
                                        <li><a href="blog-grid-sidebar.php">Grid sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Masonry</a>
                                    <ul>
                                        <li><a href="blog-masonry-2cols.php">Masonry 2 columns</a></li>
                                        <li><a href="blog-masonry-3cols.php">Masonry 3 columns</a></li>
                                        <li><a href="blog-masonry-4cols.php">Masonry 4 columns</a></li>
                                        <li><a href="blog-masonry-sidebar.php">Masonry sidebar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Mask</a>
                                    <ul>
                                        <li><a href="blog-mask-grid.php">Blog mask grid</a></li>
                                        <li><a href="blog-mask-masonry.php">Blog mask masonry</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Single Post</a>
                                    <ul>
                                        <li><a href="single.php">Default with sidebar</a></li>
                                        <li><a href="single-fullwidth.php">Fullwidth no sidebar</a></li>
                                        <li><a href="single-fullwidth-sidebar.php">Fullwidth with
                                                sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="elements-list.php" class="sf-with-ul">Kosmetik</a>

                            <ul>
                                <li><a href="elements-products.php">Products</a></li>
                                <li><a href="elements-typography.php">Typography</a></li>
                                <li><a href="elements-titles.php">Titles</a></li>
                                <li><a href="elements-banners.php">Banners</a></li>
                                <li><a href="elements-product-category.php">Product Category</a></li>
                                <li><a href="elements-video-banners.php">Video Banners</a></li>
                                <li><a href="elements-buttons.php">Buttons</a></li>
                                <li><a href="elements-accordions.php">Accordions</a></li>
                                <li><a href="elements-tabs.php">Tabs</a></li>
                                <li><a href="elements-testimonials.php">Testimonials</a></li>
                                <li><a href="elements-blog-posts.php">Blog Posts</a></li>
                                <li><a href="elements-portfolio.php">Portfolio</a></li>
                                <li><a href="elements-cta.php">Call to Action</a></li>
                                <li><a href="elements-icon-boxes.php">Icon Boxes</a></li>
                            </ul>
                        </li>
                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .col-lg-9 -->
            <div class="header-right">
                <i class="la la-lightbulb-o"></i>
                <p>Clearance Up to 30% Off</span></p>
            </div>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
<?php }
    }//Tidak ada user
else ?>
<header class="header header-10 header-intro-clearance sticky-header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
            </div><!-- End .header-left -->

            <div class="header-right">

                <ul class="top-menu">
                    <li>
                        <a href="#">Links</a>
                        <ul>
                            <li>
                                <a href="about.php">Tentang Apotek</a>
                            </li>
                            <li>
                                <div class="header-dropdown">
                                    <a href="#">USD</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">Eur</a></li>
                                            <li><a href="#">Usd</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div><!-- End .header-dropdown -->
                            </li>
                            <li>
                                <div class="header-dropdown">
                                    <a href="#">Engligh</a>
                                    <div class="header-menu">
                                        <ul>
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">Spanish</a></li>
                                        </ul>
                                    </div><!-- End .header-menu -->
                                </div><!-- End .header-dropdown -->
                            </li>
                            <li class="login">
                                <a href="#signin-modal" data-toggle="modal" action="verifikasi.php">Sign in /
                                    Sign up</a>
                            </li>
                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="index.php" class="logo">
                    <img src="assets/dist/img/logo.png" alt="Molla Logo" width="105" height="25">
                </a>
            </div><!-- End .header-left -->

            <div class="header-center">
                <div
                    class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                    <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <div class="select-custom">
                                <select id="cat" name="cat">
                                    <option value="">All Departments</option>
                                    <option value="1">Fashion</option>
                                    <option value="2">- Women</option>
                                    <option value="3">- Men</option>
                                    <option value="4">- Jewellery</option>
                                    <option value="5">- Kids Fashion</option>
                                    <option value="6">Electronics</option>
                                    <option value="7">- Smart TVs</option>
                                    <option value="8">- Cameras</option>
                                    <option value="9">- Games</option>
                                    <option value="10">Home &amp; Garden</option>
                                    <option value="11">Motors</option>
                                    <option value="12">- Cars and Trucks</option>
                                    <option value="15">- Boats</option>
                                    <option value="16">- Auto Tools &amp; Supplies</option>
                                </select>
                            </div><!-- End .select-custom -->
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..."
                                required>
                            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div>

            <div class="header-right">
                <div class="header-dropdown-link">
                    <div class="dropdown compare-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" data-display="static" title="Compare Products"
                            aria-label="Compare Products">
                            <i class="icon-random"></i>
                            <span class="compare-txt">Compare</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="compare-products">
                                <li class="compare-product">
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    <h4 class="compare-product-title"><a href="product.php">Blue Night
                                            Dress</a></h4>
                                </li>
                                <li class="compare-product">
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    <h4 class="compare-product-title"><a href="product.php">White Long
                                            Skirt</a></h4>
                                </li>
                            </ul>

                            <div class="compare-actions">
                                <a href="#" class="action-link">Clear All</a>
                                <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i
                                        class="icon-long-arrow-right"></i></a>
                            </div>
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .compare-dropdown -->



                    <a href="wishlist.php" class="wishlist-link">
                        <i class="icon-heart-o"></i>
                        <span class="wishlist-count">3</span>
                        <span class="wishlist-txt">Wishlist</span>
                    </a>

                    <div class="dropdown cart-dropdown">
                        <a href="cart.php" class="dropdown-toggle" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count">2</span>
                            <span class="cart-txt">Cart</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="product.php">Beige knitted elastic runner shoes</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $84.00
                                        </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->

                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="product.php">Blue utility pinafore denim dress</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $76.00
                                        </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="product.php" class="product-image">
                                            <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->
                            </div><!-- End .cart-product -->

                            <div class="dropdown-cart-total">
                                <span>Total</span>

                                <span class="cart-total-price">$160.00</span>
                            </div><!-- End .dropdown-cart-total -->

                            <div class="dropdown-cart-action">
                                <a href="cart.php" class="btn btn-primary">View Cart</a>
                                <a href="checkout.php" class="btn btn-outline-primary-2"><span>Checkout</span><i
                                        class="icon-long-arrow-right"></i></a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .cart-dropdown -->
                    <div class="account">
                        <a href="dashboard.php" title="My account">
                            <img src="assets/dist/img/user/user.png">
                            <p class="hidden-xs" style="margin-top:7px">Account</p>
                        </a>
                    </div><!-- End .compare-dropdown -->
                </div>
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->

    <div class="header-bottom">
        <div class="container">
            <div class="header-left">
                <div class="dropdown category-dropdown show is-on" data-visible="false">
                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true" data-display="static" title="Category ">
                        Category
                    </a>

                    <div class="dropdown-menu">
                        <nav class="side-nav">
                            <ul class="menu-vertical sf-arrows">
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Batuk, Pilek & Flu</a>

                                    <div class="megamenu">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="menu-title">Batuk, Pilek & Flu</div>
                                                            <ul>
                                                                <li><a href="#">Batuk & Flu</a></li>
                                                                <li><a href="#">Batuk Berdahak</a></li>
                                                                <li><a href="#">Untuk Bayi & Anak</a></li>
                                                                <li><a href="#">Nasal Spray & Dekongestan</a></li>
                                                                <li><a href="#">Balsem & Minyak Esensial</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-3 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.php" class="banner banner-menu">
                                                        <img src="assets/images/demos/demo-13/menu/banner-1.jpg"
                                                            alt="Banner">
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Demam & Sendi</a>

                                    <div class="megamenu">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Demam & Nyeri</div>
                                                            <ul>
                                                                <li><a href="#">Peredam Demam & Nyeri</a></li>
                                                                <li><a href="#">Terapi Panas & Dingin</a></li>
                                                                <li><a href="#">Untuk Bayi & Anak</a></li>
                                                                <li><a href="#">Perawatan Herbal</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Tulang & Sendi</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Tulang & Osteoporosis</a></li>
                                                                <li><a href="#">Relaksan Otot</a></li>
                                                                <li><a href="#">Asam Urat & Radang Sendi</a></li>
                                                                <li><a href="#">Balsem & Minyak</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->
                                                    </div>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.php" class="banner banner-menu">
                                                        <img src="assets/images/demos/demo-13/menu/banner-2.jpg"
                                                            alt="Banner">
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Pencernaan & Kulit</a>

                                    <div class="megamenu">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Pencernaan</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Asam Lambung & GERD</a></li>
                                                                <li><a href="#">Diare</a></li>
                                                                <li><a href="#">Sembelit & Wasir</a></li>
                                                                <li><a href="#">Mual & Muntah </a></li>
                                                                <li><a href="#">Infeksi Cacing</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Kulit</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Jerawat</a></li>
                                                                <li><a href="#">Infeksi Kulit</a></li>
                                                                <li><a href="#">Dermatitis & Eksim</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .row -->
                                            </div><!-- End .menu-col -->
                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.php" class="banner banner-menu">
                                                        <img src="assets/images/demos/demo-13/menu/banner-2.jpg"
                                                            alt="Banner">
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div>
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Alergi & Infeksi</a>

                                    <div class="megamenu">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Alergi</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Obat Alergi</a></li>
                                                                <li><a href="#">Pereda Gatal</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Infeksi</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Antibiotik</a></li>
                                                                <li><a href="#">Antivirus</a></li>
                                                                <li><a href="#">Antijamur</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.php" class="banner banner-menu">
                                                        <img src="assets/images/demos/demo-13/menu/banner-3.jpg"
                                                            alt="Banner">
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .row -->

                                        <div class="menu-col menu-brands">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <a href="#" class="brand">
                                                        <img src="assets/images/brands/1.png" alt="Brand Name">
                                                    </a>
                                                </div><!-- End .col-lg-2 -->

                                                <div class="col-lg-2">
                                                    <a href="#" class="brand">
                                                        <img src="assets/images/brands/2.png" alt="Brand Name">
                                                    </a>
                                                </div><!-- End .col-lg-2 -->

                                                <div class="col-lg-2">
                                                    <a href="#" class="brand">
                                                        <img src="assets/images/brands/3.png" alt="Brand Name">
                                                    </a>
                                                </div><!-- End .col-lg-2 -->

                                                <div class="col-lg-2">
                                                    <a href="#" class="brand">
                                                        <img src="assets/images/brands/4.png" alt="Brand Name">
                                                    </a>
                                                </div><!-- End .col-lg-2 -->

                                                <div class="col-lg-2">
                                                    <a href="#" class="brand">
                                                        <img src="assets/images/brands/5.png" alt="Brand Name">
                                                    </a>
                                                </div><!-- End .col-lg-2 -->

                                                <div class="col-lg-2">
                                                    <a href="#" class="brand">
                                                        <img src="assets/images/brands/6.png" alt="Brand Name">
                                                    </a>
                                                </div><!-- End .col-lg-2 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .menu-brands -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Masalah THT & Mata</a>

                                    <div class="megamenu">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="menu-title">THT</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Sariawan & Herpes Mulut</a></li>
                                                                <li><a href="#">Obat Kumur Antiseptik</a></li>
                                                                <li><a href="#">Obat Tetes Telinga</a></li>
                                                                <li><a href="#">Kebersihan Hidung</a></li>
                                                                <li><a href="#">Pelega Tenggorokan</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Mata</div>

                                                            <ul>
                                                                <li><a href="#">Gatal, Kering & Merah</a></li>
                                                            </ul>
                                                        </div><!-- End .row -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.php" class="banner banner-menu">
                                                        <img src="assets/images/demos/demo-13/menu/banner-2.jpg"
                                                            alt="Banner">
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Alat Kesehatan</a>

                                    <div class="megamenu">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="menu-title">Berdasarkan Jenisnya</div>
                                                            <!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Elektronik Radiasi</a></li>
                                                                <li><a href="#">Elektromedik Non-Radiasi</a></li>
                                                                <li><a href="#">Non-Elektromedik Radiasi</a></li>
                                                                <li><a href="#">Non-Elektromedik Tidak Steril</a></li>
                                                                <li><a href="#">Diagnostic Invitro</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->
                                                        <div class="col-md-4">
                                                            <div class="menu-title">Berdasarkan Fungsinya</div>

                                                            <ul>
                                                                <li><a href="#">Medis</a></li>
                                                                <li><a href="#">Non-Medis</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="menu-title">Berdasarkan Pemakaiannya</div>

                                                            <ul>
                                                                <li><a href="#">Habis Pakai</a></li>
                                                                <li><a href="#">Tak Habis Pakai</a></li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- End .row -->
                                                </div>
                                            </div><!-- End .row -->
                                            <div class="col-md-4">
                                                <div class="banner banner-overlay">
                                                    <a href="category.php" class="banner banner-menu">
                                                        <img src="assets/images/demos/demo-13/menu/banner-2.jpg"
                                                            alt="Banner">
                                                    </a>
                                                </div><!-- End .banner banner-overlay -->
                                            </div><!-- End .col-md-4 -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Kosmetik Bentuk Padat</a>

                                    <div class="megamenu">
                                        <div class="menu-col">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="menu-title"></div>
                                                    <ul>
                                                        <li><a href="#">Garam Mandi</a></li>
                                                        <li><a href="#">Lulur</a></li>
                                                        <li><a href="#">Mangir</a></li>
                                                        <li><a href="#">Deodoran</a></li>
                                                        <li><a href="#">Sediaan Untuk Mandi Lainnya</a></li>
                                                        <li><a href="#">Busa Mandi</a></li>
                                                        <li><a href="#">Hair & Bodywash</a></li>
                                                        <li><a href="#">Pembersih Kulit Muka</a></li>
                                                        <li><a href="#">Pelembab</a></li>
                                                        <li><a href="#">Pewangi Badan</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- End .row -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Kosmetik Bentuk Cairan</a>

                                    <div class="megamenu">
                                        <div class="menu-col">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="menu-title"></div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="#">Pewangi Badan</a></li>
                                                        <li><a href="#">Parfum</a></li>
                                                        <li><a href="#">Minyak Rambut</a></li>
                                                        <li><a href="#">Pembersih Muka</a></li>
                                                        <li><a href="#">Penyegar Muka</a></li>
                                                        <li><a href="#">Penyegar Kulit</a></li>
                                                        <li><a href="#">Sabun Mandi</a></li>
                                                        <li><a href="#">Minyak Mandi</a></li>
                                                        <li><a href="#">Busa Mandi</a></li>
                                                        <li><a href="#">Astringent</a></li>
                                                        <li><a href="#">Eau de cologne</a></li>
                                                        <li><a href="#">Eau de toilette</a></li>
                                                        <li><a href="#">Eau de Parfum</a></li>
                                                    </ul>
                                                </div><!-- End .col-md-4 -->
                                                <div class="col-md-4">
                                                    <div class="menu-title"></div>
                                                    <ul>
                                                        <li><a href="#">Perawatan Kaki</a></li>
                                                        <li><a href="#">Sampo</a></li>
                                                        <li><a href="#">Kondisioner</a></li>
                                                        <li><a href="#">Pembersih Rambut dan Tubuh</a></li>
                                                        <li><a href="#">Hair Dressing</a></li>
                                                        <li><a href="#">Hair Creambath</a></li>
                                                        <li><a href="#">Lulur</a></li>
                                                        <li><a href="#">Minyak Pijat</a></li>
                                                        <li><a href="#">Perawatan Kulit, Badan, dan Tangan</a></li>
                                                        <li><a href="#">Bedak</a></li>
                                                        <li><a href="#">Mangir</a></li>
                                                        <li><a href="#">Krim Siang</a></li>
                                                        <li><a href="#">Krim Malam</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="menu-title"></div>
                                                    <ul>
                                                        <li><a href="#">Pelembab</a></li>
                                                        <li><a href="#">Make Up Base</a></li>
                                                        <li><a href="#">Foundation</a></li>
                                                        <li><a href="#">Deodoran</a></li>
                                                        <li><a href="#">Sediaan Mandi</a></li>
                                                        <li><a href="#">Hair Creambath</a></li>
                                                        <li><a href="#">Penyejuk Kulit</a></li>
                                                        <li><a href="#">Sediaan Untuk Pijat</a></li>
                                                        <li><a href="#">Sediaan Wangi Wangi</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- End .row -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                                <li class="megamenu-container">
                                    <a class="sf-with-ul" href="#">Kosmetik Bentuk Serbuk</a>

                                    <div class="megamenu">
                                        <div class="menu-col">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="menu-title"></div>
                                                    <!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="#">Serbuk Mandi</a></li>
                                                        <li><a href="#">Masker Wajah</a></li>
                                                        <li><a href="#">Bedak Badan</a></li>
                                                        <li><a href="#">Bedak Dingin</a></li>
                                                        <li><a href="#">Bedak Wajah</a></li>
                                                        <li><a href="#">Deodoran-antiperspiran</a></li>
                                                        <li><a href="#">Bedak Perawatan Kaki</a></li>
                                                        <li><a href="#">Garam Mandi</a></li>
                                                    </ul>
                                                </div><!-- End .col-md-4 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .megamenu -->
                                </li>
                            </ul><!-- End .menu-vertical -->
                        </nav><!-- End .side-nav -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .category-dropdown -->
            </div><!-- End .col-lg-3 -->
            <div class="header-center">
                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container"><a href="index.php">Home</a></li>
                        <li class="megamenu-container"><a href="category.php">Shop</a></li>
                        <li class="megamenu-container"><a href="product.php">Product</a></li>
                </nav><!-- End .main-nav -->
            </div><!-- End .col-lg-9 -->
            <div class="header-right">
                <i class="la la-lightbulb-o"></i>
                <p>Clearance Up to 30% Off</span></p>
            </div>
        </div><!-- End .container -->
    </div><!-- End .header-bottom -->
</header><!-- End .header -->
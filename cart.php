<!DOCTYPE html>
<html lang="en">

<?php 

session_start();

include 'includes/connect.php';
include 'includes/class.php';
include 'includes/head.php'; 

/*if (isset($_GET['id']) && !isset($_POST['update'])) {
$ambil ="SELECT b.kode, b.barang, sp.supplier, b.generik, b.foto, s.satuan, k.kategori, g.golongan, be.bentuk, b.beli, b.jual, b.minimum, b.maximum, b.created, b.update
FROM barang b 
INNER JOIN supplier sp ON b.id_supplier = sp.id
INNER JOIN satuan s ON b.satuan=s.kode
INNER JOIN kategori k ON b.kategori=k.kode
INNER JOIN golongan g ON b.golongan=g.kode
INNER JOIN bentuk be ON b.bentuk=be.kode
WHERE id=".$_GET['id'];
$result = $conn->query($ambil);
var_dump($ambil);
/** @var $ambil 
$product = $ambil->fetch_assoc($result);
$item = new Item();
$item->kode = $product->kode;
$item->nama = $product->barang;
$item->harga = $product->jual;
$iteminstock = $product->jumlah;
$item->quantity = 1;

$index = -1;
$cart = unserialize(serialize($_SESSION['cart']));
for($i=0; $i<count($cart);$i++)
        if ($cart[$i]->id == $_GET['id']){
            $index = $i;
            break;
        }
        if($index == -1) 
            $_SESSION['cart'][] = $item; //$ _SESSION ['cart']: set $ cart sebagai variabel _session
        else {
            
            if (($cart[$index]->quantity) < $iteminstock)
                 $cart[$index]->quantity ++;
                 $_SESSION['cart'] = $cart;
        }
}
//Menghapus produk dalam keranjang
if(isset($_GET['index']) && !isset($_POST['update'])) {
    $cart = unserialize(serialize($_SESSION['cart']));
    unset($cart[$_GET['index']]);
    $cart = array_values($cart);
    $_SESSION['cart'] = $cart;
}
// Perbarui jumlah dalam keranjang
if(isset($_POST['update'])) {
    $arrQuantity = $_POST['quantity'];
    $cart = unserialize(serialize($_SESSION['cart']));
    for($i=0; $i<count($cart);$i++) {
       $cart[$i]->quantity = $arrQuantity[$i];
    }
    $_SESSION['cart'] = $cart;
  }*/  
?>

<body>
    <div class="page-wrapper">

        <?php include 'includes/header.php'; ?>
        <main class="main">
            <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
                <div class="container">
                    <h1 class="page-title">Shopping Cart</h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="cart">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9">
                                <form method="post">
                                    <table class="table table-cart table-mobile">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <?php
                                         /*$cart = unserialize(serialize($_SESSION['cart']));
                                             $s = 0;
                                             $index = 0;
                                                 for($i=0; $i<count($cart); $i++){
                                                    $s += $cart[$i]->price * $cart[$i]->quantity;
                                            */?>
                                        <tbody>
                                            <tr>
                                                <td class="product-col">
                                                    <div class="product">
                                                        <figure class="product-media">
                                                            <a href="#">
                                                                <img src="assets/images/products/table/product-1.jpg"
                                                                    alt="Product image">
                                                            </a>
                                                        </figure>

                                                        <h3 class="product-title">
                                                            <a href="#">Beige knitted elastic runner shoes</a>
                                                        </h3><!-- End .product-title -->
                                                    </div><!-- End .product -->
                                                </td>
                                                <td class="price-col">$84.00</td>
                                                <td class="quantity-col">
                                                    <div class="cart-product-quantity">
                                                        <input type="number" class="form-control" value="1" min="1"
                                                            max="10" step="1" data-decimals="0" required>
                                                    </div><!-- End .cart-product-quantity -->
                                                </td>
                                                <td class="total-col">$84.00</td>
                                                <td class="remove-col"><button class="btn-remove"><i
                                                            class="icon-close"></i></button></td>
                                            </tr>
                                            <?php //    	$index++;    } ?>
                                            <tr>
                                                <td class="product-col">
                                                    <div class="product">
                                                        <figure class="product-media">
                                                            <a href="#">
                                                                <img src="assets/images/products/table/product-2.jpg"
                                                                    alt="Product image">
                                                            </a>
                                                        </figure>

                                                        <h3 class="product-title">
                                                            <a href="#">Blue utility pinafore denim dress</a>
                                                        </h3><!-- End .product-title -->
                                                    </div><!-- End .product -->
                                                </td>
                                                <td class="price-col">$76.00</td>
                                                <td class="quantity-col">
                                                    <div class="cart-product-quantity">
                                                        <input type="number" class="form-control" value="1" min="1"
                                                            max="10" step="1" data-decimals="0" required>
                                                    </div><!-- End .cart-product-quantity -->
                                                </td>
                                                <td class="total-col">$76.00</td>
                                                <td class="remove-col"><button class="btn-remove"><i
                                                            class="icon-close"></i></button></td>
                                            </tr>
                                        </tbody>
                                    </table><!-- End .table table-wishlist -->
                                </form>
                                <div class="cart-bottom">
                                    <div class="cart-discount">
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" required
                                                    placeholder="coupon code">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary-2" type="submit"><i
                                                            class="icon-long-arrow-right"></i></button>
                                                </div><!-- .End .input-group-append -->
                                            </div><!-- End .input-group -->
                                        </form>
                                    </div><!-- End .cart-discount -->

                                    <a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i
                                            class="icon-refresh"></i></a>
                                </div><!-- End .cart-bottom -->
                            </div><!-- End .col-lg-9 -->
                            <aside class="col-lg-3">
                                <div class="summary summary-cart">
                                    <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                                    <table class="table table-summary">
                                        <tbody>
                                            <tr class="summary-subtotal">
                                                <td>Subtotal:</td>
                                                <td>$160.00</td>
                                            </tr><!-- End .summary-subtotal -->
                                            <tr class="summary-shipping">
                                                <td>Shipping:</td>
                                                <td>&nbsp;</td>
                                            </tr>

                                            <tr class="summary-shipping-row">
                                                <td>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="free-shipping" name="shipping"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="free-shipping">Free
                                                            Shipping</label>
                                                    </div><!-- End .custom-control -->
                                                </td>
                                                <td>$0.00</td>
                                            </tr><!-- End .summary-shipping-row -->

                                            <tr class="summary-shipping-row">
                                                <td>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="standart-shipping" name="shipping"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="standart-shipping">Standart:</label>
                                                    </div><!-- End .custom-control -->
                                                </td>
                                                <td>$10.00</td>
                                            </tr><!-- End .summary-shipping-row -->

                                            <tr class="summary-shipping-row">
                                                <td>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" id="express-shipping" name="shipping"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label"
                                                            for="express-shipping">Express:</label>
                                                    </div><!-- End .custom-control -->
                                                </td>
                                                <td>$20.00</td>
                                            </tr><!-- End .summary-shipping-row -->

                                            <tr class="summary-shipping-estimate">
                                                <td>Estimate for Your Country<br> <a href="dashboard.html">Change
                                                        address</a></td>
                                                <td>&nbsp;</td>
                                            </tr><!-- End .summary-shipping-estimate -->

                                            <tr class="summary-total">
                                                <td>Total:</td>
                                                <td>$160.00</td>
                                            </tr><!-- End .summary-total -->
                                        </tbody>
                                    </table><!-- End .table table-summary -->

                                    <a href="checkout.html"
                                        class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                                </div><!-- End .summary -->

                                <a href="category.html" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE
                                        SHOPPING</span><i class="icon-refresh"></i></a>
                            </aside><!-- End .col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <?php 
/*if(isset($_GET["id"]) || isset($_GET["index"])){
 header('Location: cart.php');
}*/ 
?>

        <?php include 'includes/footer.php'; ?>
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <?php 
    include 'includes/mobile.php'; 
    include 'includes/sigin.php'; ?>'
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
<?php 

include 'connect.php';
/*
$conn = mysqli_connect("localhost", "root", "", "apotek");
// $conn = mysqli_connect("localhost", "id18666014_md_taha_ahmed", "bGCL0+&4qT64IM_{", "id18666014_pharmeasy");
{
    ob_start();
    header('Location: ' . $url);
    // header('Location: https://md-taha-ahmed.000webhostapp.com/pharmeasy/' . $url);
    ob_end_flush();
    die();
}
/**
 * Summary of get_redirect
 * @param mixed $url
 * @return void
 */
function get_redirect($url)
{
    echo " <script> 
    window.location.href = '" . $url . "'; 
    </script>";
    // echo "<script>
    // window.location.href = 'https://md-taha-ahmed.000webhostapp.com/pharmeasy/" . $url . "';
    // </script>";
}

/*function print_r($data) {
    echo "<script> alert('Test')</script>";
}*/

function ambildata($query) {
    global $conn;
    $data = [];
    $result = $conn->query($query);
    if ($result) {
        while ($row = $result->fetch_assoc()) {
        $data[] = $row;
        }
        if (!empty($data)) {
            return $data;
            }  else {
                    return "";
                    }
    } else {
            return 0;
            }
}

function single_query($query){
    global $conn;
    if ($conn->query($query)) {
        return "done";
    }else {
        die("no data" . $conn->connect_error);
    }
}

function masuk(){
    global $conn;
    if (isset($_POST['masuk'])) {

        $email = trim(strtolower($_POST['email']));
        $password = trim($_POST['password']);
        if (empty($email) or empty($password)) {
            $_SESSION['pesan'] ="empty_err";
            header("../index.php");
        }
        $query = "SELECT foto, apoteker, email, password, telepon, alamat, tingkatan, user.akses
    FROM apoteker a
    INNER JOIN akses user ON a.akses=user.id
    WHERE email='$email' and password='$password'
    UNION
    SELECT foto, karyawan, email, password, telepon, alamat, jabatan, user.akses
    FROM karyawan k
    INNER JOIN akses user ON k.akses=user.id
    WHERE email='$email' and password='$password'
    UNION 
    SELECT foto, supplier, email, password, telepon, alamat, tipe, user.akses
    FROM supplier s
    INNER JOIN akses user ON s.akses=user.id
    WHERE email='$email' and password='$password'
    UNION 
    SELECT foto, pelanggan, email, password, telepon, alamat, tingkatan, user.akses 
    FROM pelanggan p
    INNER JOIN akses user ON p.akses=user.id 
    WHERE email='$email' and password='$password';";
        $data = ambildata($query);
        if(empty($data)) {
            $_SESSION['pesan'] = "loginErr";
            header("../index.php");
        } elseif ($password == $data[0]['password'] and $email == $data[0]['email']) {
            $_SESSION['user_id'] = $data[0]['user_id'];
            header("../index.php");
        } else {
            $_SESSION['pesan'] = "loginErr";
            header("../login.php");
        }
    }
}
    function daftar(){
        global $conn;
        if(isset($_POST['masuk'])){
            $nama = ($_POST['nama']);
            $email = ($_POST['email']);
            $telepon = ($_POST['telepon']);
            $password = ($_POST['password']);
            $foto = ($_POST['foto']);  
            $akses = ($_POST['akses']);
            $calendar = ($_POST['calendar']);
            $alamat = ($_POST['alamat']);
        
                // check username already exist
            if($akses === "apoteker"){
                $query = "SELECT * FROM apoteker WHERE email = '$email'";
            }
            elseif($akses === "karyawan"){
                $query = "SELECT * FROM karyawan WHERE email = '$email'";
            }
            elseif($akses === 'supplier'){
                $query = "SELECT * FROM supplier WHERE email = '$email'";
            }
        
            $sql = $conn->query($query);
        
            $qu_register = "INSERT INTO " . "$akses" . " (nama, email, password, telepon, alamat, foto, akses) VALUES('$nama', '$email', '$password', '$telepon', '$alamat', '$foto', '$akses')";
            $sql_register = $conn->query($qu_register) or die("Error: " . mysqli_error($conn));
        
        
        $result = $conn->query("INSERT INTO user (foto, nama, email, password, telepon, alamat, akses) values('$foto','$nama','$email', '$password', '$telepon','$alamat','$akses')
        ");
    echo " 
    <script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'index.php';
    </script>";
    exit();
}
    }


    function pesan()
    {
        if (isset($_SESSION['pesan'])) {
            if ($_SESSION['pesan'] == "signup_err_password") {
                echo "   <div class='alert alert-danger' role='alert'>
            please enter the password in correct form !!!
          </div>";
                unset($_SESSION['pesan']);
            } elseif ($_SESSION['pesan'] == "loginErr") {
                echo "   <div class='alert alert-danger' role='alert'>
            The email or the password is incorrect !!!
          </div>";
                unset($_SESSION['pesan']);
            } elseif ($_SESSION['pesan'] == "usedEmail") {
                echo "   <div class='alert alert-danger' role='alert'>
            This email is already used !!!
          </div>";
                unset($_SESSION['pesan']);
            } elseif ($_SESSION['pesan'] == "wentWrong") {
                echo "   <div class='alert alert-danger' role='alert'>
            Something went wrong !!!
          </div>";
                unset($_SESSION['pesan']);
            } elseif ($_SESSION['pesan'] == "empty_err") {
                echo "   <div class='alert alert-danger' role='alert'>
            please don't leave anything empty !!!
          </div>";
                unset($_SESSION['pesan']);
            } elseif ($_SESSION['pesan'] == "signup_err_email") {
                echo "   <div class='alert alert-danger' role='alert'>
            please enter the email in the correct form !!!
          </div>";
                unset($_SESSION['pesan']);
            }
        }
    }

    function search()
{
    if (isset($_GET['search'])) {
        $search_text = $_GET['search_text'];
        if ($search_text == "") {
            return;
        }
        $query = "SELECT * FROM item WHERE item_tags LIKE '%$search_text%'";
        $data = ambildata($query);
        return $data;
    } elseif (isset($_GET['cat'])) {
        $cat = $_GET['cat'];
        $query = "SELECT * FROM item WHERE item_cat='$cat' ORDER BY RAND()";
        $data = ambildata($query);
        return $data;
    }
}

function all_products()
{
    $query = "SELECT * FROM barang ORDER BY kode()";
    $data = ambildata($query);
    return $data;
}
function total_price($data)
{
    $sum = 0;
    $num = sizeof($data);
    for ($i = 0; $i < $num; $i++) {
        $sum += $sum += ($data[$i][0]['item_price'] * $_SESSION['cart'][$i]['quantity']);
    }
    return $sum;
}

function get_item()
{
    if (isset($_GET['product_id'])) {
        $_SESSION['item_id'] = $_GET['product_id'];
        $id = $_GET['product_id'];
        $query = "SELECT * FROM item WHERE item_id='$id'";
        $data = ambildata($query);
        return $data;
    }
}

function get_user($id)
{
    $query = "SELECT user_id ,user_fname ,user_lname ,email ,user_address FROM user WHERE user_id=$id";
    $data = ambildata($query);
    return $data;
}

function add_cart($item_id)
{
    $user_id = $_SESSION['user_id'];
    $quantity = $_GET['quantity'];
    if (empty($user_id)) {
        get_redirect("login.php");
    } else {
        if (isset($_GET['cart'])) {
            if (isset($_SESSION['cart'])) {
                $num = sizeof($_SESSION['cart']);
                $_SESSION['cart'][$num]['user_id'] = $user_id;
                $_SESSION['cart'][$num]['item_id'] = $item_id;
                $_SESSION['cart'][$num]['quantity'] = $quantity;
                get_redirect("product.php?product_id=" . $item_id);
            } else {
                $_SESSION['cart'][0]['user_id'] = $user_id;
                $_SESSION['cart'][0]['item_id'] = $item_id;
                $_SESSION['cart'][0]['quantity'] = $quantity;
                get_redirect("product.php?product_id=" . $item_id);
            }
        } elseif (isset($_GET['buy'])) {
            if (isset($_SESSION['cart'])) {
                $num = sizeof($_SESSION['cart']);
                $_SESSION['cart'][$num]['user_id'] = $user_id;
                $_SESSION['cart'][$num]['item_id'] = $item_id;
                $_SESSION['cart'][$num]['quantity'] = $quantity;
                get_redirect("cart.php");
            } else {
                $_SESSION['cart'][0]['user_id'] = $user_id;
                $_SESSION['cart'][0]['item_id'] = $item_id;
                $_SESSION['cart'][0]['quantity'] = $quantity;
                get_redirect("cart.php");
            }
        }
        if (isset($_SESSION['cart'])) {
            $num = sizeof($_SESSION['cart']);
            for ($i = 0; $i < $num; $i++) {
                for ($j = $i + 1; $j < $num; $j++) {

                    if ($_SESSION['cart'][$i]['item_id'] == $_SESSION['cart'][$j]['item_id']) {
                        $_SESSION['cart'][$i]['quantity'] += $_SESSION['cart'][$j]['quantity'];
                        unset($_SESSION['cart'][$j]);
                        $_SESSION['cart'] = array_values($_SESSION['cart']);
                    }
                }
            }
        }
    }
}

function get_cart()
{
    $num = sizeof($_SESSION['cart']);
    if (isset($num)) {
        for ($i = 0; $i < $num; $i++) {
            $item_id = $_SESSION['cart'][$i]['item_id'];
            $query = "SELECT item_id, item_image ,item_title  ,item_quantity ,item_price ,item_brand FROM item WHERE item_id='$item_id'";
            $data[$i] = ambildata($query);
        }
        return $data;
    }
}

function delete_from_cart()
{
    if (isset($_GET['delete'])) {
        $item_id = $_GET['delete'];
        $num = sizeof($_SESSION['cart']);
        for ($i = 0; $i < $num; $i++) {
            if ($_SESSION['cart'][$i]['item_id'] == $item_id) {
                unset($_SESSION['cart'][$i]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                break;
            }
        }
        get_redirect("cart.php");
    } elseif (isset($_GET['delete_all'])) {
        unset($_SESSION['cart']);
        get_redirect("cart.php");
    }
}

function add_order()
{
    if (isset($_GET['order'])) {
        $num = sizeof($_SESSION['cart']);
        date_default_timezone_set("Asia/Kolkata");
        $date = date("Y-m-d");
        for ($i = 0; $i < $num; $i++) {
            $item_id = $_SESSION['cart'][$i]['item_id'];
            $user_id = $_SESSION['cart'][$i]['user_id'];
            $quantity = $_SESSION['cart'][$i]['quantity'];
            if ($quantity == 0) {
                return;
            } else {
                $query = "INSERT INTO orders (user_id,item_id,order_quantity,order_date) 
                VALUES('$user_id','$item_id','$quantity','$date')";
                $data =   single_query($query);
                $item = get_item_id($item_id);
                $new_quantity = $item[0]['item_quantity'] - $quantity;
                $query = "UPDATE item SET item_quantity='$new_quantity' WHERE item_id = '$item_id'";
                single_query($query);
            }
        }
        unset($_SESSION['cart']);
        get_redirect("final.php");
    }
}
function cekuser($id)
{
    $query = "SELECT user_id FROM user where user_id='$id'";
    $row = ambildata($query);
    if (empty($row)) {
        return 0;
    } else {
        return 1;
    }
}
function get_item_id($id)
{
    $query = "SELECT * FROM item WHERE item_id= '$id'";
    $data = ambildata($query);
    return $data;
}
?>
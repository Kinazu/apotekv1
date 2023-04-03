<?php 
error_reporting( error_reporting() & ~E_NOTICE );
include "config/connect.php";

if ($_GET['page'] =="data_user") {
    include "module/data_user.php";
}else if ($_GET['page'] =="data_barang") {
    include "module/data_barang.php";
}else if ($_GET['page'] =="data_transaksi") {
    include "module/data_transaksi.php";
}
?>
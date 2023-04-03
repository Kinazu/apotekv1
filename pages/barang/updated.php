<?php 

include '../../config/connect.php';

if (isset($_POST['edit'])) {
    $kodebarang = $_POST['b.kode'];
    $namabarang = $_POST['b.nama'];
    $supplier = $_POST['b.nama_supplier'];
    $generik = $_POST['b.generik'];
    $satuan = $_POST['s.satuan'];
    $kategori = $_POST['k.kategori'];
    $golongan = $_POST['g.golongan'];
    $bentuk = $_POST['be.bentuk'];
    $hargabeli = $_POST['b.harga_beli'];
    $hargajual = $_POST['b.harga_jual'];
    $minimum = $_POST['b.minimum'];
    $maximum = $_POST['b.maximum'];
    $updated = $_POST['b.updated'];
    $sql = "UPDATE barang SET namabarang = ['$namabarang'], supplier = ['$supplier'], generik = ['$generik'], satuan = ['$satuan'], kategori = ['$kategori'], golongan = ['$golongan'], bentuk = ['$bentuk'], harga_beli = ['$hargabeli'], harga_jual = ['$hargajual'], minimum = ['$minimum'], maximum = ['$maximum'] , updated = ['$updated'] WHERE kodebarang = [$kodebarang] ";

    if ($conn->query($sql) === true) {
        echo "Record updated successfully";
        header("Location:data_barang.php");
    } else {
        echo "Error updating record: " . $conn->Error;
        header("Location:edit.php?pesan=gagal");
    }
}
?>
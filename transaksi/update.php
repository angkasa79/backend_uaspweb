<?php
require_once '../koneksi.php';

$id_transaksi = isset($_POST['id_transaksi']) ? $_POST['id_transaksi'] : '';
$nama_barang = isset($_POST['nama_barang']) ? $_POST['nama_barang'] : '';
$jumlah_barang = isset($_POST['jumlah_barang']) ? $_POST['jumlah_barang'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$id_pembeli = isset($_POST['id_pembeli']) ? $_POST['id_pembeli'] : '';
$id_makanan = isset($_POST['id_makanan']) ? $_POST['id_makanan'] : '';
$id_minuman = isset($_POST['id_minuman']) ? $_POST['id_minuman'] : '';

/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE transaksi SET nama_barang = '$nama_barang', jumlah_barang = '$jumlah_barang',tanggal = '$tanggal', id_pembeli = '$id_pembeli', id_makanan = '$id_makanan', id_minuman = '$id_minuman' WHERE `id_transaksi`= '$id_transaksi'";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;
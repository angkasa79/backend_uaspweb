<?php
require_once '../koneksi.php';

$id_makanan = isset($_POST['id_makanan']) ? $_POST['id_makanan'] : '';
$nama_makanan = isset($_POST['nama_makanan']) ? $_POST['nama_makanan'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$stok = isset($_POST['stok']) ? $_POST['stok'] : '';
$deskripsi_makanan = isset($_POST['deskripsi_makanan']) ? $_POST['deskripsi_makanan'] : '';
$id_warung = isset($_POST['id_warung']) ? $_POST['id_warung'] : '';



/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE makanan SET nama_makanan = '$nama_makanan', harga = '$harga', stok = '$stok', deskripsi_makanan = '$deskripsi_makanan', id_warung = '$id_warung' WHERE `id_makanan`= '$id_makanan'";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;
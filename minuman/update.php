<?php
require_once '../koneksi.php';

$id_minuman = isset($_POST['id_minuman']) ? $_POST['id_minuman'] : '';
$nama_minuman = isset($_POST['nama_minuman']) ? $_POST['nama_minuman'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$stok = isset($_POST['stok']) ? $_POST['stok'] : '';
$deskripsi_minuman = isset($_POST['deskripsi_minuman']) ? $_POST['deskripsi_minuman'] : '';
$id_warung = isset($_POST['id_warung']) ? $_POST['id_warung'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE minuman SET nama_minuman = '$nama_minuman', harga = '$harga', stok = '$stok', deskripsi_minuman =  '$deskripsi_minuman', id_warung = '$id_warung' WHERE `id_minuman`= '$id_minuman'";
    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;
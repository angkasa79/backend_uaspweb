<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//makanan
$id_minuman = isset($_POST['id_minuman']) ? $_POST['id_minuman'] : '';
$nama_minuman = isset($_POST['nama_minuman']) ? $_POST['nama_minuman'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$stok = isset($_POST['stok']) ? $_POST['stok'] : '';
$deskripsi_minuman = isset($_POST['deskripsi_minuman']) ? $_POST['deskripsi_minuman'] : '';
$id_warung = isset($_POST['id_warung']) ? $_POST['id_warung'] : '';


/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `minuman`(`id_minuman`, `nama_minuman`, `harga`, `stok`, `deskripsi_minuman`, `id_warung`) VALUES ('$id_minuman]','$nama_minuman','$harga','$stok','$deskripsi_minuman','$id_warung')";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;
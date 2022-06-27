<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//buku
$id_makanan = isset($_POST['id_makanan']) ? $_POST['id_makanan'] : '';
$nama_makanan = isset($_POST['nama_makanan']) ? $_POST['nama_makanan'] : '';
$harga = isset($_POST['harga']) ? $_POST['harga'] : '';
$stok = isset($_POST['stok']) ? $_POST['stok'] : '';
$deskripsi_makanan = isset($_POST['deskripsi_makanan']) ? $_POST['deskripsi_makanan'] : '';
$id_warung = isset($_POST['id_warung']) ? $_POST['id_warung'] : '';


/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `makanan`(`id_makanan`, `nama_makanan`, `harga`, `stok`, `deskripsi_makanan`, `id_warung`) VALUES ('$id_makanan','$nama_makanan','$harga','$stok','$deskripsi_makanan','$id_warung')";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;
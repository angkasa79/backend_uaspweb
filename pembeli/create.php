<?php
include_once '../koneksi.php';
/**
 * @var $connection PDO
 */

//buku
$id_pembeli = isset($_POST['id_pembeli']) ? $_POST['id_pembeli'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$nomor_hp = isset($_POST['nomor_hp']) ? $_POST['nomor_hp'] : '';

/***@var $connection PDO */

try {
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `pembeli`(`id_pembeli`, `nama`, `jenis_kelamin`, `alamat`, `nomor_hp`) VALUES ('$id_pembeli','$nama','$jenis_kelamin','$alamat','$nomor_hp')";



    $connection -> exec($sql);
    echo "Data berhasil insert";
} catch (PDOException $e) {
    echo $sql."<br>".$e->getMessage();
} 

$connection = null;
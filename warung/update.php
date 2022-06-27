<?php
require_once '../koneksi.php';

$id_warung = isset($_POST['id_warung']) ? $_POST['id_warung'] : '';
$nama_warung = isset($_POST['nama_warung']) ? $_POST['nama_warung'] : '';
$nama_penjual = isset($_POST['nama_penjual']) ? $_POST['nama_penjual'] : '';
$deskripsi_warung = isset($_POST['deskripsi_warung']) ? $_POST['deskripsi_warung'] : '';
$alamat_warung = isset($_POST['alamat_warung']) ? $_POST['alamat_warung'] : '';
$tahun_didirikan = isset($_POST['tahun_didirikan']) ? $_POST['tahun_didirikan'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE warung SET nama_warung = '$nama_warung', nama_penjual = '$nama_penjual',deskripsi_warung = '$deskripsi_warung', alamat_warung = '$alamat_warung', tahun_didirikan = '$tahun_didirikan' WHERE `id_warung`= '$id_warung'";

    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;
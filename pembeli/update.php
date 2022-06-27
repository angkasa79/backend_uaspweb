<?php
require_once '../koneksi.php';

$id_pembeli = isset($_POST['id_pembeli']) ? $_POST['id_pembeli'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$nomor_hp = isset($_POST['nomor_hp']) ? $_POST['nomor_hp'] : '';


/***@var $connection PDO */

try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE pembeli SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', nomor_hp =  '$nomor_hp' WHERE `id_pembeli`= '$id_pembeli'";
    $connection->exec($sql);
    echo "Data berhasil di update";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;
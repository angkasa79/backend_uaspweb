<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$id_pembeli = $_POST['id_pembeli'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "Delete FROM pembeli WHERE `id_pembeli`= '$id_pembeli'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;
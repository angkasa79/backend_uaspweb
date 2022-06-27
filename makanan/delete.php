<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$id_makanan = $_POST['id_makanan'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Delete FROM makanan WHERE `id_makanan`= '$id_makanan'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;
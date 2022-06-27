<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$id_minuman = $_POST['id_minuman'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "Delete FROM minuman WHERE `id_minuman`= '$id_minuman'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;
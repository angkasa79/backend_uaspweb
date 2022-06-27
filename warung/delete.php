<?php
require_once '../koneksi.php';

/***
 * @var $connection PDO
 */

$id_warung = $_POST['id_warung'];
try {
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "Delete FROM warung WHERE `id_warung`= '$id_warung'";

    $connection->exec($sql);
    echo "Data berhasil di hapus";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$connection = null;
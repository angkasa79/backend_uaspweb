<?php

include "../koneksi.php";
/**
 * @var $connection PDO
 */

//query
 $query = "select *from transaksi";
    $stmt = $connection->query($query);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $result = $stmt->fetchAll();
//Menampilkan dalam bentuk JSON
header('Content-Type: application/json');
echo json_encode($result);
?>



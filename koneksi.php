<?php
$dbserver = 'localhost';
$dbname = 'uaspweb';
$dbuser = 'root';
$dbpassword = '';

$dsn = "mysql:host={$dbserver};dbname={$dbname}";

$connection = null;
try{
    $connection = new pdo ($dsn, $dbuser, $dbpassword);

}catch (Exception $exception){
    $response['error'] = $exception->getMessage();
    echo json_encode($response);
    die();
}

<?php
//conexão com o banco de dados
$host     = 'mysql';
$db       = 'datatable';
$user     = 'root';
$password = 'rootadm';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
    $conn = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

} catch (PDOException $e) {
     echo $e->getMessage();
}

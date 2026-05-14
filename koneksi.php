<?php

$dsn = "mysql:host=localhost;dbname=tugas1";
$user = "root";
$password = "";

try {

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    echo "Koneksi gagal : " . $e->getMessage();
}
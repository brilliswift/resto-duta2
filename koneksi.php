<?php
$host = 'localhost';
$user = 'username';
$pass = 'password';
$db   = 'resto_duta2';

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
}
?>

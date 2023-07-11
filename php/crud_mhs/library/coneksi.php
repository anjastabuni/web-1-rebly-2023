<?php
$server = 'localhost';
$nama = 'root';
$pass = '';
$db = 'web1';

$koneksi = mysqli_connect($server, $nama, $pass, $db);

if (!$koneksi) {
    die('Gagal koneksi databases ..' . mysqli_connect_error());
}

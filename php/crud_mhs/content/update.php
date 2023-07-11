<?php

include('../library/coneksi.php'); // Mengkoneksikan dengan database

$id = $_POST['id'];
// Karena form menggunakan method post kita gunakan $_POST
$npm = $_POST['npm']; // Index didalamnya sesuai dengan input name yang ada di form
$nama = $_POST['nama']; // Index didalamnya sesuai dengan input name yang ada di form
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$update = mysqli_query($koneksi, "UPDATE mahasiswa SET npm='$npm', nama='$nama', alamat='$alamat', telp='$telp' WHERE id='$id' "); //menggunakan kondisi where untuk menyimpan dengan data spesifik

if ($update)
    header('Location:list.php'); // Jika berhasil akan di arahkan ke halaman list.php
else
    echo 'Input data gagal'; // Jika gagal akan keluar pesan tersebut

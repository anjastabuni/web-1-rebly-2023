<?php

include('../library/coneksi.php');

//karena form menggunakan method post kita gunakan $_POST
$npm = $_POST['npm'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

$insert = mysqli_query($koneksi, "INSERT INTO mahasiswa SET npm='$npm', nama='$nama', alamat='$alamat', telp='$telp' ");

if ($insert)
    header('Location:list.php'); //Jika berhasil akan di arahkan ke halaman list.php
else
    echo 'Input data gagal'; //jika gagal akan keluar pesan tersebut
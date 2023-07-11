<?php

include('../library/coneksi.php'); //mengkoneksikan database

$id = $_GET['id']; //mengambil id yang di parsing dari halaman list.php

$delete = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'"); //megnghapus data spesifik

if ($delete) {

    header('Location : list.php');
} else {

    echo 'Delete data gagal';
}

<?php
// menulis dan membaca file
$message = "Selamat datang";
file_put_contents('content.txt', $message, FILE_APPEND);

$isi_file = file_get_contents('content.txt');
echo $isi_file;

<?php
// menampilkan helo world
echo "Helo World";
echo "<br>";

// membuat variabel
$namaLengkap = "Rebly Megib Tabuni";
echo $namaLengkap;

// mix html
$nama = "Rebly Tabuni";
$alamat = "Sentani";
$email = "reblytabuni2004@gmail.com";
$hp = '081248069721';

// pengenalan fungsi
$saNama = ucwords('rebly megib tabuni')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsep dasar PHP</title>
</head>

<body>
    <h1>selamat datang</h1>
    <div>
        <p>Nama Lengkap <?php echo $nama; ?></p>
        <p>Alamat <?= $alamat; ?></p>
        <p>Email <?= $email; ?></p>
        <p>Telp <?= $hp; ?></p>
    </div>

    <h2>Pengenalan Fungsi</h2>
    <p><?php echo $saNama; ?></p>
</body>

</html>
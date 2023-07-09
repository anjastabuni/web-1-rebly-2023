<?php

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pass = $_POST['password'];
$tgl = $_POST['tanggal'];
$prodi = $_POST['prodi'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan data</title>
</head>

<body>
    <h1>Form POST</h1>
    <table border="1px">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Password</th>
                <th>Tanggal Lahir</th>
                <th>Prodi</th>

            </tr>
        </thead>
        <tbody>
            <td><?= $nama; ?></td>
            <td><?= $alamat; ?></td>
            <td><?= $pass; ?></td>
            <td><?= $tgl; ?></td>
            <td><?= $prodi; ?></td>

        </tbody>
    </table>
</body>

</html>
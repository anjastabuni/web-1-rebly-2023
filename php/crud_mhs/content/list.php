<?php

include_once('../library/coneksi.php');

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list mahasiswa</title>
</head>

<body>
    <a href="tambah_mhs.php">Tambah Data</a><br><br>
    <form action="search.php" method="GET">
        <input type="text" name="keyword" placeholder="keyword" />
        <button type="submit">Search</button>
    </form><br>
    <table border="1">
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telp</th>
            <th>Pilihan</th>
        </tr>
        <?php foreach ($results as $result) : ?>
            <tr>
                <td><?php echo $result['npm'] ?></td>
                <td><?php echo $result['nama'] ?></td>
                <td><?php echo $result['alamat'] ?></td>
                <td><?php echo $result['telp'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $result['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>
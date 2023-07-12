<?php

include_once('../library/coneksi.php');

$keyword = $_GET['keyword']; // Mengambil keyword yang dikirim dari form
$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nama='$keyword'");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list mahasiswa</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>
    <div class="container">
        <h1>Daftar Nama Mahasiswa Teknik Informatika 2018</h1>
        <div class="container-lg">
            <div class="header">
                <a href="tambah_mhs.php" class="tambah"><i class="fa-solid fa-plus"></i> TAMBAH</a>
                <form action="search.php" method="GET">
                    <input class="search" type="text" name="keyword" placeholder="keyword" value="<?= $_GET['keyword'] ?>" />
                    <button class="search-submit" type="submit">Search</button>
                </form>
            </div>
            <table>
                <tr>
                    <th>NPM</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>TELP</th>
                    <th>PILIHAN</th>
                </tr>
                <?php foreach ($results as $result) : ?>
                    <tr>
                        <td><?php echo $result['npm'] ?></td>
                        <td><?php echo $result['nama'] ?></td>
                        <td><?php echo $result['alamat'] ?></td>
                        <td><?php echo $result['telp'] ?></td>
                        <td>
                            <a class="edit" href="edit.php?id=<?php echo $result['id']; ?>"><i class="fa-solid fa-pen"></i> EDIT</a>
                            <a class="hapus" href="delete.php?id=<?php echo $result['id']; ?>"><i class="fa-solid fa-trash-can"></i> HAPUS</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>

</html>
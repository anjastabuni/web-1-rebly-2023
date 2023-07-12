<?php

include('../library/coneksi.php');

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list mahasiswa</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://kit.fontawesome.com/355acdeb36.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@300;500&family=Candal&family=Lora&family=Montagu+Slab:wght@200;400&family=Montserrat+Subrayada&family=Montserrat:wght@200;500;700&family=Nunito+Sans:wght@300;500&family=Orbitron:wght@500&family=Patrick+Hand&family=Poppins:wght@300;600&family=Quicksand:wght@300&family=Raleway&family=Ysabeau:wght@200;300;500&display=swap" rel="stylesheet">
</head>
<style>
    * {
        font-family: 'Ysabeau', sans-serif;
    }
</style>

<body>
    <div class="container">
        <h1>Mahasiswa Teknik Informatika 2018</h1>
        <div class="container-lg">
            <div class="header">
                <a href="tambah_mhs.php" class="tambah"><i class="fa-solid fa-plus"></i> TAMBAH</a>
                <form action="search.php" method="GET">
                    <input type="text" class="search" name="keyword" placeholder="keyword" />
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
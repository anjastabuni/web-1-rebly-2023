<?php

include('../library/coneksi.php');

$id = $_GET['id']; // Untuk mengambil id yang dilempar dari form list.php

$query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id' LIMIT 1"); //mengambil data sesuai dengan id nya
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <form action="insert.php" method="post">

        <input type="hidden" name="id" value=<?php echo $result[0]['id'] ?>> <!--untuk menyimpan id tanpa menampilkan data id pada form-->

        <label>NPM</label><br />
        <input type="text" name="npm" value="<?php echo $result[0]['npm'] ?>" /> <!--menampilkan data sesuai dr variabel $result diatas-->
        <br /><br />
        <label>Nama</label><br />
        <input type="text" name="nama" value="<?php echo $result[0]['nama'] ?>" /> <!--menampilkan data sesuai dr variabel $result diatas-->
        <br /><br />

        <label>Alamat</label><br />
        <textarea name="alamat" cols="30" rows="10" /><?= $result[0]['alamat']; ?></textarea>

        <br /><br />

        <label>Telp</label><br />
        <input type="text" name="telp" value="<?= $result[0]['telp']; ?>" />
        <br /><br />

        <button type="submit">Perbaharui</button>
    </form>
</body>

</html>
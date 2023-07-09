<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan form GET</title>
</head>

<body>
    <form action="get.php" method="get">
        <label for="nama">Nama</label>
        <input type="text" name="nama"><br><br>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="" cols="20" rows="5"></textarea><br><br>
        <button type="submit">kirim</button>
    </form>
    <p>Selamat datang <?= $_GET["nama"]; ?></p>
    <p>Alamat Kamu <?= $_GET["alamat"]; ?></p>
</body>

</html>
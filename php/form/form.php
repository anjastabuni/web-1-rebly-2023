<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Form input data</h1>
    <form action="post.php" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama"> <br>
        <label for="alamat">Alamat</label>
        <textarea name="alamat" id="alamat" cols="50" rows="5"></textarea><br>
        <label for="pass">Password</label>
        <input type="password" name="password"><br>
        <label for="tgl">Tanggal Lahir</label>
        <input type="date" name="tanggal"><br>
        <label for="jurusan">Jurusan</label>
        <select name="prodi" id="prodi">
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Manajemen Informatika">Manajemen Informatika</option>
        </select><br>

        <button type="submit">Kirim</button>
        <button type="reset">Hapus</button>
    </form>
</body>

</html>
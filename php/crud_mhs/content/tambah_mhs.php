<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah data</title>
</head>

<body>
    <form action="insert.php" method="post">
        <label>NPM</label><br />
        <input type="text" name="npm" />
        <br /><br />
        <label>Nama</label><br />
        <input type="text" name="nama" />
        <br /><br />

        <label>Alamat</label><br />
        <textarea name="alamat" cols="30" rows="10" /></textarea>
        <br /><br />

        <label>Telp</label><br />
        <input type="text" name="telp" />
        <br /><br />

        <button type="submit">Tambah</button>
    </form>
</body>

</html>
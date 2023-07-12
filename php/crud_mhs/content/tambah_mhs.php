<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah data</title>
    <link rel="stylesheet" href="../style/form.css">
</head>

<body>
    <div class="container">
        <h1>Form Tambah</h1>
        <form action="insert.php" method="post">
            <div class="label">
                <label>NPM</label>
            </div>
            <div class="input">
                <input type="text" name="npm" /><br>
            </div>
            <div class="label">
                <label>Nama</label>
            </div>
            <div class="input">
                <input type="text" name="nama" /><br>
            </div>
            <div class="label">
                <label>Telp</label>
            </div>
            <div class="input">
                <input type="text" name="telp" />
            </div>
            <br><br>
            <div class="label">
                <label>Alamat</label>
            </div>
            <div class="input">
                <textarea class="alamat" name="alamat" cols="20" rows="5" /></textarea><br>
            </div>

            <button type="submit">Tambah</button>
        </form>
    </div>
</body>

</html>
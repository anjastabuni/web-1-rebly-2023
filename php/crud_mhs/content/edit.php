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
    <link rel="stylesheet" href="../style/form.css">
</head>

<body>
    <div class="container">
        <h1>Form Edit</h1>

        <form action="update.php" method="post">

            <input type="hidden" name="id" value=<?php echo $result[0]['id'] ?>> <!--untuk menyimpan id tanpa menampilkan data id pada form-->
            <div class="label">
                <label>NPM</label>
            </div>
            <div class="input">
                <input type="text" name="npm" value="<?php echo $result[0]['npm'] ?>" /> <!--menampilkan data sesuai dr variabel $result diatas-->
            </div>
            <div class="label">
                <label>Nama</label>
            </div>
            <div class="input">
                <input type="text" name="nama" value="<?php echo $result[0]['nama'] ?>" /> <!--menampilkan data sesuai dr variabel $result diatas-->
            </div>
            <div class="label">
                <label>Alamat</label><br />
            </div>
            <div class="input">
                <textarea class="alamat" name="alamat" cols="30" rows="10" /><?= $result[0]['alamat']; ?></textarea>
            </div>
            <div class="label">
                <label>Telp</label><br />
            </div>
            <div class="input">
                <input type="text" name="telp" value="<?= $result[0]['telp']; ?>" />
            </div>


            <button type="submit">Perbaharui</button>
        </form>
    </div>
</body>

</html>
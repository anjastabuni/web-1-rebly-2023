<?php
// perulangan for
echo "<h2>Perulangan For</h2>";
for ($i = 1; $i < 10; $i++) {
    echo $i . ' Selamat Malam <br>';
}

// perulangan for array
echo "<h2>Perulangan For array</h2>";
$jumlah = 0;
$warna = ['merah', 'biru', 'merah', 'putih', 'merah', 'biruh', 'putih'];
for ($i = 0; $i < 7; $i++) {
    if ($warna[$i] == 'merah') {
        $jumlah++;
    }
}
echo "Jumlah warna merah sebanyak $jumlah";

// perulangan while
echo "<h2>Perulangan While</h2>";
$warna  = ['merah', 'biru', 'kuning', 'merah', 'hijau', 'biru', 'merah', 'biru', 'kuning', 'merah', 'hijau', 'biru'];
$jumlah = 0;
$i      = 0;
while ($i <= 11) {
    if ($warna[$i] == 'merah') {
        $jumlah++;
    }
    $i++;
}
echo "Jumlah warna merah " . $jumlah;

// perulangan do while
echo "<h2>Perulangan Do While</h2>";
$x = 1;
do {
    echo "Nomor Antrian yang tersedia: $x <br>";
    $x++;
} while ($x <= 10);

// perulangan foreach

echo "<h2>Perulangan Foreach</h2>";
$arr_warna  = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
$jumlah_merah = 0;
foreach ($arr_warna as $key => $value) {
    echo "Warna pada elemen array ke-$key adalah $value <br>";
    if ($value == 'merah') {
        $jumlah_merah++;
    }
}
echo "Jumlah warna merahnya adalah $jumlah_merah";

// break
echo "<h2>Fungsi Break</h2>";
$arr_warna  = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
echo "Saya mencari warna hitam<br>";
foreach ($arr_warna as $key => $value) {
    echo "Warna pada elemen array ke-$key adalah $value <br>";
    if ($value == 'hitam') {
        echo "<b>Nah Warna Hitam sudah ditemukan! Dia berada pada indeks ke-$key</b>";
        break;
    }
}

// continue
echo "<h2>Fungsi Continue</h2>";
$arr_warna  = ['merah', 'biru', 'kuning', 'hitam', 'hijau', 'biru', 'pink', 'biru', 'jingga'];
foreach ($arr_warna as $key => $value) {
    if ($value == 'hitam') {
        continue;
    }
    echo "Warna pada elemen array ke-$key adalah $value <br>";
}

// menampilkan data ke dalam tabel
echo "<h2>Menampilkan data ke dalam tabel</h2>";
$karyawan =
    [
        ['nama' => 'Rebly', 'alamat' => 'PNG', 'jenis_kelamin' => 'Pria'],
        ['nama' => 'Jelky', 'alamat' => 'Jamaica', 'jenis_kelamin' => 'Pria'],
        ['nama' => 'Iko', 'alamat' => 'Vanuatu', 'jenis_kelamin' => 'Pria']
    ];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php
        foreach ($karyawan as $key => $value) {
        ?>
            <tr>
                <td><?php echo $value['nama']; ?></td>
                <td><?php echo $value['alamat']; ?></td>
                <td><?php echo $value['jenis_kelamin']; ?></td>
            </tr>
        <?php
        } ?>

</body>

</html>
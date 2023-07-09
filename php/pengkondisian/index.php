<?php
// pengecekan 1 kondisi
echo "<h2>Pengecekan satu kondisi</h2>";
$password = 'rebly123';
$kode = 123;
if ($password == 'rebly123') {
    echo "Berhasil Masuk ";
    echo "<br>";
}
// cpengecekan 2 kondisi
echo "<h2>Pengecekan dua kondisi</h2>";
if ($kode == 123) {
    echo true;
} else {
    echo "Kode salah";
}

// pengecekan banyak kondisi
echo "<h2>Pengecekan banyak kondisi</h2>";
$nilai = 'C';
echo '<br>';

if ($nilai == 'A') {
    echo "Sangat Baik";
} elseif ($nilai == 'B') {
    echo "Baik";
} elseif ($nilai == 'C') {
    echo "Cukup";
}


// if bersarang
echo "<h2>If Bersarang</h2>";
$psikotes   = 85;
$wawancara  = 'lulus';
$kesehatan  = 'tidak';
if ($psikotes >= 80) {
    echo "Selamat Anda Lulus Psikotes " . "<br>";
    if ($wawancara == 'lulus') {
        echo "Selamat Anda Lulus Wawancara" . "<br>";
        if ($kesehatan == 'lulus') {
            echo "Selamat Anda Layak menjadi karyawan Kami";
        } else {
            echo "Mohon Maaf Anda tidak Lulus Tes Kesehatan";
        }
    } else {
        echo "Mohon Maaf Anda tidak Lulus Wawancara";
    }
} else {
    echo "Mohon Maaf Anda tidak Lulus Psikotes";
}

// switch
echo "<h2>If Bersarang</h2>";
$nilai = "A";
switch ($nilai) {
    case 'A':
        echo "Nilai Anda sangat memuaskan";
        break;
    case 'B':
        echo "Nilai Anda memuaskan";
        break;
    case 'C':
        echo "Nilai Anda cukup";
        break;
    case 'D':
        echo "Nilai Anda kurang";
        break;
    case 'E':
        echo "Anda tidak lulus";
        break;
    default:
        echo "Nilai tidak terdaftar";
        break;
}

// pengecekan kondisi ganda
$wamena = 'Wamena';
$tolikara = 'Tolikara';
$harga = 900;
$biaya_tambahan = 500;
echo "<h2>Pengecekan Kondisi Ganda</h2>";
if ($wamena == 'Wamena' && $tolikara == 'Tolikara') {
    echo "Total Harga : " . ($harga + $biaya_tambahan);
} else {
    echo "Total Harga : " . $harga;
}

// ternary operator
$nilai = 80;
echo "<h2>Menggonakan Ternary Operator</h2>";
echo ($nilai >= 80) ? "Anda Lulus" : "Anda tidak Lulus";

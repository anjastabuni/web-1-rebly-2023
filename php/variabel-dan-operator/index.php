<!-- tipe data integer dan float -->
<?php
$a = 10;
$b = 3;
$c = $a + $b;
$d = $a / $b;

// menampilkan
echo $c;
echo "<br>";
// var round untuk membulatkan ketika desimamal -0,5
echo round($d, 2);
echo "<br>";
// operator increment dan decrement
$a++;
echo $a;
echo "<br>";
$b--;
echo $b;

// tipe data string
$pesan = "selamat datang";
echo "<h1>Tipe data String</h1>";
echo $pesan;


// concat
$firsName = "Rebly";
$lastName = "Tabuni";
$fullName = $firsName . $lastName;
echo "<h2>Concat atau penggabungan</h2>";
echo $fullName;


// tipe data boolean
$a = 10;
$b = 5;
$kondisi = $a > $b;
echo "<h2>Tipe data boolean</h2>";
var_dump($kondisi);
echo "<br>";


// tipe data array
echo "<h2>Tipe Data Array</h2>";
$angka = array(1, 2, 3, 4, 5); //kumpulan data integer
$buah = ['Buah Merah', 'Psiang', 'Durian', 'Salak',];
var_dump($angka);
echo "<br>";
var_dump($buah);

// array asosiatif
$datadiri = [
    'nama' => 'Rebly Megib Tabuni',
    'npm' => '18411017',
    'alamat' => 'Sentani',
    'email' => 'reblytabuni2004@gmail.com'
];
echo "<h2>Array Asosiatif</h2>";
foreach ($datadiri as $index => $data) {
    echo $index . " : " . $data;
    echo "<br>";
}

// array multidimensi
$kelompok = [
    ['jelky', 'trivena', 'manson'],
    ['rebly', 'mas', 'siska'],
    ['iren', 'iko', 'marsal']
];
echo "<h2>array multidimensi</h2>";
for ($row = 0; $row < 3; $row++) {
    echo "<p>Kelompok $row</p>";
    echo '<ul>';
    for ($col = 0; $col < 3; $col++) {
        // var_dump($kelompok[$row][$col]);
        echo "<li>" . $kelompok[$row][$col] . "</li>";
    }
    echo '</ul>';
}

// sorting arrays 
$nomor = [4, 6, 2, 22, 11];
sort($nomor);

$wadahdata = count($nomor);
echo "<h2>Sotring data array</h2>";
for ($x = 0; $x < $wadahdata; $x++) {
    echo $nomor[$x];
    echo "<br>";
}
$nomor = [4, 6, 2, 22, 11];
rsort($nomor);

$wadahdata = count($nomor);
echo "<br>";
for ($x = 0; $x < $wadahdata; $x++) {
    echo $nomor[$x];
    echo "<br>";
}

// tipe data null
$pesan = "Selamat Datang";
echo "<h2>tipe data null</h2>";
echo $pesan ?? NULL;
echo $nama ?? NULL;

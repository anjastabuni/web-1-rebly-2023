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


// tipe data array

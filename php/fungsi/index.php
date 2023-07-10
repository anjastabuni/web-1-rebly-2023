<?php
// membuat fungsi sendiri
function cetakPesan()
{
    echo "Selamat Datang <br>";
}
cetakPesan();


// membuat fungsi dengan parameter
function sapa($nama)
{
    echo "Hallo $nama, apa kabarmu hari ini? semoga kabarmu sehat dan bahagia selalu <br>";
}
sapa('Jekson');
sapa('Jelky');
sapa('Mas');

// skup variabel
$siapa = 'Rebly';
function cetak($siapa = null)
{
    echo "hallo $siapa <br>";
}
echo cetak($siapa);

// fingsi parameter 
$alas = 10;
$tinggi = 25;

function luasSegitiga($alas, $tinggi)
{
    $luas = $alas * $tinggi / 2;
    return $luas;
}
echo luasSegitiga($alas, $tinggi);
echo "<br>";

// penggunaan fungsi by referense
function kaliLipat(&$angka)
{
    $angka = $angka * 2;
}
$x = 5;
echo $x . '<br>';
kaliLipat($x);
echo $x . '<br>';
kaliLipat($x);

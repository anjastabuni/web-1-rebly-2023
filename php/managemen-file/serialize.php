<?php
$anggota = [
    ['nama' => 'rebly', 'gol_darah' => 'B'],
    ['nama' => 'manson', 'gol_darah' => 'AB'],
    ['nama' => 'mas', 'gol_darah' => 'B'],
    ['nama' => 'iko', 'gol_darah' => 'O']
];

$data = serialize($anggota);
file_put_contents('data.txt', $data);

$output = file_get_contents('data.txt');
$hasil = unserialize($output);
print_r($hasil);
echo '<br><br>';

// menyimpan dalam bentuk json
$data = json_encode($anggota);
file_put_contents('datajson.txt', $data);

$output = file_get_contents('datajson.txt');
$hasil = json_decode($output, true);
print_r($hasil);

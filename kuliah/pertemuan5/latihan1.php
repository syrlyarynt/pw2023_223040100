<?php 
//ARRAY
// Membuat array

$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Syerli', 19, false];
$binatang = ['🐱', '🐯', '🐺', '🦄', '🐨'];

//Mencetak array
//Mencetak satu elemen di dalam array menggunakan echo
echo $hari[2];
echo "<br>";

//mencetak semua isi array
//var_dump, print_r
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($myArray);
echo "<br>";
print_r($binatang);
echo "<hr>";

//Manipulasi array
//menambahkan elemen menggunakan index
$hari[3] = 'Kamis';
print_r($hari);
echo "<br>";

//menambahkan elemen di akhir array menggunakan []
$hari[] = "Jum'at";
$hari[] = 'Sabtu';
print_r($hari);
echo "<hr>";

//menambah elemen di akhir array menggunakan array_push
array_push($bulan, 'april', 'may');
print_r($bulan);
echo "<hr>";

//menambahkan elemen di awal array menggunakan array_unshift
array_unshift($binatang, '🦒');
print_r($binatang);
echo "<hr>";

//menghapus elemen di belakang array dengan array_pop
array_pop($hari);
print_r($hari);
echo "<hr>";

//menghapus element di depan array dengan array_shift
array_shift($bulan);
print_r($bulan);




?>
<?php
//array
//variabel yang dapat memiliki banyak nilai
//elemen pada arry boleh memiliki tipe data yang berbeda
//pasangan antara key dan value
//key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu",);
//cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arri = [123,"tulisan", false];


//Menampilkan Array
//var_dump() /print_r()
//var_dump($hari);
//echo "<br>;
//print_r($bulan)
//echo "<br>;

// Menampilkan 1 elemen pada array
//echo $arri[0];
//echo "<br>";
//echo $bulan[1]

//menambahkan elemen baru pada arry
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);





?>
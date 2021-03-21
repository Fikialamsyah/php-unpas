<?php
// array 
// variable yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$aar1 = [123, "tulisan", false];

// menampilkan Array
// var_dump() / print_r()
var_dump($hari);
echo "<br/>";
print_r($bulan);


// menampilkan 1 elemen array
echo $arr1[0];
echo "<br/>";
echo $bulan[1];

// menambahkan elemen baru pada array
$hari[] = "Kamis";
echo "<br/>";
var_dump($hari);

?>
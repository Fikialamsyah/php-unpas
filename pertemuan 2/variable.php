<?php

// variable dan tipe data
// varibale
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Fiki Alamsyah";
echo "Nama saya $nama";

echo "<br>";

// operator
// aritmatika
// + - * / %
$x = 10; 
$y = 5;
echo $x * $y;

echo "<br>";

// penggabung string / concetenation / concat
// .
$nama_depan = "Fiki";
$nama_belakang = "Alamsyah";
echo $nama_depan . " " . $nama_belakang;

echo "<br>";

// assignment
// =, +=, -=, /=, %=, .=
$z = 1;
$hasil += $z;
echo $hasil;
$nama_lengkap += $nama_depan;
$nama_lengkap += " ";
$hasil .= $nama_belakang;

echo "<br>";

// perbandingan
// <, >, <=, >=, ==
var_dump(1 === "1");

echo "<br>";

// logika 
// &&, ||, !
var_dump($x < 20 && $x % 2 == 0);
var_dump($x < 20 || $x % 2 == 0);


?>
<?php
// Date
// untuk menampilkan tanggal dan format tertentu
echo date('l, d-M-Y');

echo "<br/>";

// Time
// Unix Timestamp / EPOCH Time
// detik yang sudah berlalu sejak 1 januari 1970
echo time();

echo "<br>";

// cek 100 hari kedepan
echo date('d M Y', time() + 60*60*24*100);

echo "<br>";

// cek 100 hari kebelakang
echo date('d M Y', time() - 60*60*24*100);

echo "<br>";

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// cek tanggal lahir
echo date('d M Y', mktime(0,0,0,1,16,2001));
echo "<br/>";

// strtotime
strtotime("16 jan 2001");




?>
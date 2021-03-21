<?php
// Array Associative
// definisinya sama seperti array numerik, kucuali
// kek-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "nama" => "Ammar Mubarok R",
    "nim" => "110219001",
    "jurusan" => "Teknik Infomatika ",
    "email" => "ammar@gmail.com",
    "gambar" => "ammar.png"
    ],
    [
    "nama" => "Acmad Irvan Fauzi",
    "nim" => "110219002",
    "jurusan" => "Teknik Infomatika ",
    "email" => "irvan@gmail.com",
    "gambar" => "irvan.png"
    ]
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["nim"]; ?></li>
            <li><?= $mhs["jurusan"]; ?></li>
            <li><?= $mhs["email"]; ?></li>
            <li><img src="img/<?= $mhs["gambar"]; ?>" alt="" width="100px" height="150px"></li>
        </ul>
    <?php endforeach;?>
</body>
</html>

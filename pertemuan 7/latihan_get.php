<?php
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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs): ?>
        <li>
            <a href="latihan_get2.php?nama=<?= $mhs["nama"];?>&nim=<?= $mhs["nim"];?>&jurusan=<?= $mhs["jurusan"];?>&email=<?= $mhs["email"];?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"];?></a>
        </li>
    <?php endforeach;?>
    </ul>
</body>
</html>

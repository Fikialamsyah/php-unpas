<?php
include 'functions.php';

// koneksi database
$conn = mysqli_connect("localhost", "root", "fikijaya25", "phpdasar");

// ambil data dari table mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data(fetch) mahasiswa dari object result
// mysqli_fetch_row() : mengembalikan array numerik
// mysqli_fetch_assoc() : mengembalikan array associative
// mysqli_fetch_array() :mengembalikan array keduanya
// mysqli_fetch_object() : mengembalikan object

// while($mhs = mysqli_fetch_assoc($result) ){
//     var_dump($mhs);
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="1">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i = 1 ?>
        <?php while($mhs = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><img src="img/<?= $mhs['gambar']?>" width="150px" height="150px"></td>
            <td><a href="ubah.php">ubah</a> | <a href="hapus.php">hapus</a></td>
            <td><?= $mhs['nama']?></td>
            <td><?= $mhs['nim']?></td>
            <td><?= $mhs['email']?></td>
            <td><?= $mhs['jurusan']?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="tambah.php">Tambah Data</a>
</body>
</html>
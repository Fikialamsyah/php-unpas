<?php
include 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan 
if(isset($_POST['cari'])){
    $mahasiswa = cari($_POST['keyword']);
}

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
    <a href="tambah.php">Tambah Data</a><br><br>
    <form action="" method="POST">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian ..." autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
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
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><img src="img/<?= $mhs['gambar'] ?>" width="150px" height="150px"></td>
            <td>
                <a href="ubah.php?id=<?= $mhs['id']; ?>">ubah</a> | 
                <a href="hapus.php?id=<?= $mhs['id']; ?> " onclick="return confirm('yakin ?');">hapus</a>
            </td>
            <td><?= $mhs['nama']?></td>
            <td><?= $mhs['nim']?></td>
            <td><?= $mhs['email']?></td>
            <td><?= $mhs['jurusan']?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
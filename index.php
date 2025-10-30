<?php
require 'config/Database.php';
require 'classes/Mahasiswa.php';

$db = new Database();
$conn = $db->getConnection();
$mhs = new Mahasiswa($conn);
$data = $mhs->readAll();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <a href="tambah.php">Tambah Data</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr><th>ID</th><th>Nama</th><th>NIM</th><th>Jurusan</th><th>Aksi</th></tr>
        <?php while ($row = $data->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['jurusan'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

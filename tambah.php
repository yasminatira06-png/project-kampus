<?php
require 'config/Database.php';
require 'classes/Mahasiswa.php';

$db = new Database();
$conn = $db->getConnection();
$mhs = new Mahasiswa($conn);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mhs->nama = $_POST['nama'];
    $mhs->nim = $_POST['nim'];
    $mhs->jurusan = $_POST['jurusan'];
    $mhs->create();
    header('Location: index.php');
}
?>
<form method="POST">
    <h2>Tambah Mahasiswa</h2>
    Nama: <input type="text" name="nama"><br><br>
    NIM: <input type="text" name="nim"><br><br>
    Jurusan: <input type="text" name="jurusan"><br><br>
    <button type="submit">Simpan</button>
</form>

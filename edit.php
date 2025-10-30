<?php
require 'config/Database.php';
require 'classes/Mahasiswa.php';

$db = new Database();
$conn = $db->getConnection();
$mhs = new Mahasiswa($conn);

$id = $_GET['id'];
$data = $mhs->readOne($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mhs->id = $id;
    $mhs->nama = $_POST['nama'];
    $mhs->nim = $_POST['nim'];
    $mhs->jurusan = $_POST['jurusan'];
    $mhs->update();
    header('Location: index.php');
}
?>
<form method="POST">
    <h2>Edit Mahasiswa</h2>
    Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br><br>
    NIM: <input type="text" name="nim" value="<?= $data['nim'] ?>"><br><br>
    Jurusan: <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>"><br><br>
    <button type="submit">Update</button>
</form>

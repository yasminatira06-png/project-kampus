<?php
require 'config/Database.php';
require 'classes/Mahasiswa.php';

$db = new Database();
$conn = $db->getConnection();
$mhs = new Mahasiswa($conn);

$id = $_GET['id'];
$mhs->delete($id);
header('Location: index.php');

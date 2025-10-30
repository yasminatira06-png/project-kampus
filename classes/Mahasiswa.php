<?php
class Mahasiswa {
    private $conn;
    private $table_name = "mahasiswa";

    public $id;
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $sql = "INSERT INTO {$this->table_name} (nama, nim, jurusan) VALUES (:nama, :nim, :jurusan)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            ':nama' => $this->nama,
            ':nim' => $this->nim,
            ':jurusan' => $this->jurusan
        ]);
    }

    public function readAll() {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table_name}");
        $stmt->execute();
        return $stmt;
    }

    public function readOne($id) {
        $stmt = $this->conn->prepare("SELECT * FROM {$this->table_name} WHERE id=:id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch();
    }

    public function update() {
        $stmt = $this->conn->prepare("UPDATE {$this->table_name} SET nama=:nama, nim=:nim, jurusan=:jurusan WHERE id=:id");
        return $stmt->execute([
            ':nama' => $this->nama,
            ':nim' => $this->nim,
            ':jurusan' => $this->jurusan,
            ':id' => $this->id
        ]);
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM {$this->table_name} WHERE id=:id");
        return $stmt->execute([':id' => $id]);
    }
}

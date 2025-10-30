# CRUD Mahasiswa (PHP + PDO)

Project sederhana CRUD untuk tabel `mahasiswa` (MySQL) menggunakan PDO.

## Struktur
- config/Database.php - koneksi database (PDO)
- classes/Mahasiswa.php - model Mahasiswa (create, readAll, readOne, update, delete)
- index.php - list data
- tambah.php - form tambah
- edit.php - form edit
- hapus.php - proses hapus
- kampus.sql - file SQL buat database & tabel

## Cara pakai (Laragon / XAMPP)
1. Extract ke `www` atau `public` folder Laragon/XAMPP, misal `C:/laragon/www/crud-mahasiswa`.
2. Import `kampus.sql` ke MySQL (via phpMyAdmin atau command line).
3. Pastikan config/Database.php sesuaikan username/password.
4. Buka browser: `http://localhost/crud-mahasiswa/`

## Merekam video demo (Tambah / Edit / Hapus)
- Gunakan screen recorder (OBS Studio / Loom / Xbox Game Bar).
- Tampilkan proses:
  1. Buka index.php (tabel kosong atau berisi).
  2. Klik "Tambah Data" -> isi form -> submit -> tunjukkan alert sukses.
  3. Klik "Edit" pada satu baris -> ubah -> submit -> tunjukkan alert sukses.
  4. Klik "Hapus" -> konfirmasi -> tunjukkan alert sukses.
- Ekspor video (MP4), beri nama `demo_crud_mahasiswa.mp4`.

## Push ke GitHub
```
git init
git add .
git commit -m "Initial CRUD Mahasiswa"
# buat repo di GitHub lalu
git remote add origin https://github.com/USERNAME/REPO.git
git branch -M main
git push -u origin main
```


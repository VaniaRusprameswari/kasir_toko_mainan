# Aplikasi Kasir Toko Mainan Cahaya
Aplikasi sistem penjualan berbasis web menggunakan framework codeigniter 4.

## Url Prodi 
berikut adalah Url Prodi Pendidikan Teknologi Informasi
https://pendidikan-ti.ft.unesa.ac.id/

## Tujuan Aplikasi
Aplikasi ini dikembangkan untuk membantu proses penjualan dan manajemen data di Toko secara lebih efisien dan terstruktur. Dengan aplikasi ini, pengguna dapat mengelola data barang, pemasok, pelanggan, transaksi penjualan, serta laporan dengan mudah dan cepat. Tujuan utamanya adalah mengurangi kesalahan pencatatan manual, mempercepat pelayanan kasir, dan meningkatkan efektivitas pengelolaan toko.

## Anggota Tim
Proyek ini dikerjakan oleh 4 orang anggota tim sebagai berikut:
1. Sintia Agustin Yasa          (23050974038)
2. Revian Atheyla               (23050974045)
3. Jihan Adisti Rizki Insyirah  (23050974060)
4. Vania Rusprameswari          (23050974073)

## Fitur Aplikasi
Aplikasi ini memiliki berbagai fitur yang dirancang untuk memberikan pengalaman pengguna yang menyenangkan dalam mengelola kasir dan barang:
1. Login (hak akses Superadmin, Admin, Kasir)
2. Dashboard
3. Daftar Pemasok
4. Data Pelanggan 
5. Master (kategori, unit, item)
6. Transaksi (penjualan, invoice, stok masuk, stok keluar, diskon)
7. Laporan penjualan
8. Profile
9. Pengguna
10. Logout

## Teknologi yang Digunakan
Berikut adalah teknologi yang digunakan dalam pengembangan aplikasi ini:
1. PHP 7.4 — Bahasa pemrograman utama
2. CodeIgniter 4 — Framework PHP untuk membangun aplikasi MVC
3. MySQL — Database untuk menyimpan data
4. Bootstrap — Framework CSS untuk tampilan antarmuka
5. jQuery — Library JavaScript untuk interaktivitas
6. AdminLTE — Template admin untuk dashboard
7. Composer — Manajemen dependensi PHP
8. XAMPP — Sebagai web server lokal

## Cara Menjalankan Proyek
 - Download project ini. `git clone https://github.com/VaniaRusprameswari/kasir_toko_mainan` 
 - Masuk ke direktori `cd kasir_toko_mainan`
 - Jalankan `composer update` untuk mendownload dependensinya.
 - Ganti nama file `env.sampel` menjadi `.env`
 - Ubah kofigurasi databasenya :
    - `database.default.hostname = localhost`
    - `database.default.database = kasir_toko_mainan`
    - `database.default.username = root`
    - `database.default.password = `
    - `database.default.DBDriver = MySQLi`
 - Buat nama database `kasir_toko_mainan` kemudian import file `kasir_toko_mainan.sql`
 - Jalankan aplikasi `php spark serve` kemudian buka urlnya `http://localhost:8080/`
 - Akun untuk login :
    - Username : superadmin / admin / kasir
    - Password : superadmin / admin / kasir

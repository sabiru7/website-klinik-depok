# Aplikasi Klinik

## Laravel 11
Hello
Saya membuat aplikasi klinik menggunakan Laravel 11 yang diajarkan di SMK Taruna Bhakti peminatan Web Programming. Dikerjakan oleh saya dengan menggunakan ai sebagai asisten coding

### Pertemuan 8
Tambah data

### Pertemuan 9 - PSTS
Hapus data dan Edit data

### Pertemuan 10
- Perbaikan gambar

### Pertemuan 11 dan 12
- CRUD Poli
- Perbaikan tampilan

### Pertemuan 13
- Penyelesaian CRUD Poli

### Pertemuan 14
- Search Pasien
- Search Daftar

### Yang Belum
- CRUD users
- Search users
- Search Poli
- DOKTER
- CRUD Daftar
- Laporan

## Tutorial Menggunakan Aplikasi Klinik
### Clone Repo

```bash
git clone https://github.com/muhidin/AppKlinik.git
cd AppKlinik
composer install
npm install
```
salin .env.example dan ubah namanya menjadi .env, jika menggunakan OS Linux bisa dengan perintah
```bash
cp .env.example .env
```
lalu sesuaikan isinya pada baris 22-27 menjadi
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pst11_klinikapp
DB_USERNAME=root
DB_PASSWORD=
```
lanjutkan dengan perintah
```bash
php artisan migrate --seed
php artisan storage:link
php artisan key:generate
php artisan serve
code .
```
Buka Visual Studio Code dan buka terminal berikan perintah

```bash
npm run dev
```
buka browser di http://127.0.0.1:8000
klik login, masukan username dengan email admin@klinik.com dan password admin1234

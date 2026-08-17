# 🏥 Aplikasi Klinik

Aplikasi Klinik merupakan aplikasi berbasis web yang dibuat menggunakan **Laravel 11** sebagai bagian dari pembelajaran **Web Programming di SMK Taruna Bhakti**.

Aplikasi ini dikembangkan untuk membantu proses pengelolaan data klinik, seperti data pasien, poli, pengguna, dan pendaftaran pasien.

> 👨‍💻 Dikembangkan oleh saya dengan bantuan **AI sebagai asisten coding**.

---

## ✨ Features

### 👤 Manajemen Pasien

* ➕ Tambah data pasien
* ✏️ Edit data pasien
* 🗑️ Hapus data pasien
* 🔍 Search/Cari data pasien
* 🖼️ Upload dan perbaikan gambar pasien

### 🏥 Manajemen Poli

* ➕ Tambah data poli
* ✏️ Edit data poli
* 🗑️ Hapus data poli
* 📋 Menampilkan daftar poli
* 🎨 Tampilan data poli yang lebih rapi

### 📋 Pendaftaran Pasien

* 📝 Pengelolaan data pendaftaran
* 🔍 Search data pendaftaran
* 📊 Menampilkan daftar pendaftaran pasien

### 👨‍💼 Manajemen User

* 👤 Pengelolaan akun pengguna
* 🔐 Login dan autentikasi pengguna
* 🚧 CRUD User *(dalam pengembangan)*
* 🚧 Search User *(dalam pengembangan)*

### 👨‍⚕️ Manajemen Dokter

* 🚧 Data dokter *(dalam pengembangan)*

### 📊 Laporan

* 🚧 Laporan data klinik *(dalam pengembangan)*

---

## 🚀 Status Pengembangan

| Fitur                 | Status    |
| --------------------- | --------- |
| 👤 CRUD Pasien        | ✅ Selesai |
| 🔍 Search Pasien      | ✅ Selesai |
| 🏥 CRUD Poli          | ✅ Selesai |
| 🔍 Search Poli        | 🚧 Belum  |
| 📋 Search Pendaftaran | ✅ Selesai |
| 👨‍💼 CRUD User          | 🚧 Belum  |
| 🔍 Search User        | 🚧 Belum  |
| 👨‍⚕️ Dokter             | 🚧 Belum  |
| 📋 CRUD Pendaftaran   | 🚧 Belum  |
| 📊 Laporan            | 🚧 Belum  |

---

# 🛠️ Tech Stack

* **Laravel 11**
* **PHP**
* **MySQL**
* **HTML**
* **CSS**
* **JavaScript**
* **Node.js & NPM**
* **Vite**

---

# 💻 Tutorial Menggunakan Aplikasi Klinik

## 1. Clone Repository

```bash
git clone https://github.com/muhidin/AppKlinik.git
cd AppKlinik
composer install
npm install
```

## 2. Konfigurasi `.env`

Salin file `.env.example` menjadi `.env`.

Jika menggunakan Linux:

```bash
cp .env.example .env
```

Kemudian sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pst11_klinikapp
DB_USERNAME=root
DB_PASSWORD=
```

## 3. Migration & Seeder

Jalankan:

```bash
php artisan migrate --seed
```

Kemudian buat symbolic link storage:

```bash
php artisan storage:link
```

Generate application key:

```bash
php artisan key:generate
```

## 4. Jalankan Laravel

```bash
php artisan serve
```

Buka terminal baru, kemudian jalankan:

```bash
npm run dev
```

Aplikasi dapat diakses melalui:

**http://127.0.0.1:8000**

---

# 🔐 Login

Gunakan akun berikut untuk masuk ke aplikasi:

**Email:** `admin@klinik.com`
**Password:** `admin1234`

Setelah login, pengguna dapat mencoba berbagai fitur yang tersedia pada aplikasi.

---

# 🎯 Tujuan Project

Project ini dibuat sebagai media pembelajaran untuk memahami konsep:

* Laravel 11
* MVC
* CRUD
* Database MySQL
* Migration & Seeder
* Authentication
* Search
* Upload gambar
* Relasi database
* Pengembangan aplikasi berbasis web

Project ini akan terus dikembangkan dengan menambahkan fitur **Dokter, CRUD Pendaftaran, User Management, Search Poli, Search User, dan Laporan**.

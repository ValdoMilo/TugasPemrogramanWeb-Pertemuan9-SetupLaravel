[readme_pertemuan_9_laravel_setup.md](https://github.com/user-attachments/files/33250771/readme_pertemuan_9_laravel_setup.md)
# 🚀 Tugas Pemrograman Web - Pertemuan 9: Setup Laravel

Repository ini dibuat untuk memenuhi **Tugas Rutin 9 — Setup Laravel** pada mata kuliah Pemrograman Web. Proyek ini berisi instalasi awal *framework* Laravel, integrasi basis data MySQL, penggunaan Model, Migration, Controller, hingga penyajian data dinamis melalui Blade Templating dengan *styling* Tailwind CSS CDN.

---

## 🛠️ Ringkasan Pengerjaan & Fitur (Requirements Completed)

- **Requirement 1:** Instalasi proyek Laravel baru (`TugasWeb-P9-LaravelSetup`) menggunakan Composer.
- **Requirement 2:** Pembuatan database MySQL (`tugas_p9_db`) dan konfigurasi file `.env`.
- **Requirement 3:** Running Development Server (`php artisan serve`) & verifikasi halaman welcome.
- **Requirement 4:** Pendaftaran *custom routes* (`/`, `/about`, `/contact`) yang mengembalikan Blade View.
- **Requirement 5:** Mengirim dan menampilkan data dinamis (*array*) dari Controller ke View Blade.
- **Requirement 6:** Pembuatan Model `Profile` beserta Migration (`php artisan make:model Profile -m`) dan Controller `PageController` (`php artisan make:controller PageController`).
- **Requirement 7:** Penulisan dokumentasi `README.md` lengkap terkait langkah setup dan struktur folder.
- **Requirement 8 & Bonus:** Styling UI modern (*dark mode*) menggunakan Tailwind CSS CDN serta penambahan Route Parameter (`/hello/{nama?}`).

---

## 🎨 Rincian Fitur Utama & UI

<img width="956" height="500" alt="image" src="https://github.com/user-attachments/assets/cc866dd2-b614-4644-9548-14f591d81294" />

### 1. Styling UI dengan Tailwind CSS CDN
Halaman utama dirancang dengan tampilan modern bertema **Dark Mode**, kartu profil terpusat, indikator statistik dinamis (NIM, Kelas, Jumlah Proyek, Skill), serta komponen navigasi (*Home, About, Contact*).

### 2. Route Parameter Dinamis (`/hello/{nama?}`)
Mengimplementasikan rute dinamis dengan parameter URL pada `routes/web.php`:
```php
Route::get('/hello/{nama?}', [PageController::class, 'hello']);
```
Parameter `$nama` diterima oleh `PageController@hello` dan merespon pesan sapaan dinamis secara aman menggunakan fungsi pengaman `e()`.

---

## 🚀 Panduan Menjalankan Proyek Secara Lokal

### 1. Prasyarat Sistem
- **PHP:** Versi >= 8.2 (dilengkapi ekstensi `pdo_mysql`, `mbstring`, `xml`)
- **Composer:** Versi 2.x
- **MySQL / MariaDB Server**

### 2. Cloning Repositori
```bash
git clone https://github.com/ValdoMilo/TugasPemrogramanWeb-Pertemuan9-SetupLaravel.git
cd TugasPemrogramanWeb-Pertemuan9-SetupLaravel
```

### 3. Instalasi Dependensi
```bash
composer install
```

### 4. Konfigurasi Environment & Application Key
```bash
cp .env.example .env
php artisan key:generate
```
*Pastikan nama database di file `.env` sudah disesuaikan (misal: `DB_DATABASE=tugas_p9_db`).*

### 5. Menjalankan Migrasi Database
```bash
php artisan migrate
```

### 6. Menjalankan Server Pengembangan
```bash
php artisan serve
```
Akses aplikasi melalui peramban web di `http://127.0.0.1:8000`.

---

## 📁 Penjelasan Struktur Folder & Direktori Proyek

```text
.
├── app/                              # Logika utama aplikasi (Model & Controller)
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Controller.php        # Base controller utama framework Laravel
│   │       └── PageController.php    # Controller kustom untuk logika halaman (Home, About, Contact, Hello)
│   └── Models/
│       ├── Profile.php               # Model Eloquent untuk tabel 'profiles'
│       └── User.php                  # Model Eloquent bawaan autentikasi user
├── bootstrap/
│   └── app.php                       # Inisialisasi awal aplikasi, konfigurasi routing, dan middleware
├── config/                           # Kumpulan berkas konfigurasi sistem (app, database, session, dll)
├── database/
│   └── migrations/                   # Berkas migrasi pengelola skema tabel database
│       ├── 0001_01_01_000000_create_users_table.php
│       ├── 0001_01_01_000001_create_cache_table.php
│       ├── 0001_01_01_000002_create_jobs_table.php
│       └── 2026_09_27_072204_create_profiles_table.php # Migrasi kustom tabel 'profiles'
├── public/                           # Entry point publik HTTP request
│   ├── index.php                     # Berkas utama pemroses request (Front Controller)
│   └── favicon.ico                   # Ikon favicon situs web
├── resources/
│   └── views/                        # Berkas tampilan antarmuka (UI) berbasis Blade Templating
│       ├── about.blade.php           # Tampilan Blade halaman About
│       ├── contact.blade.php         # Tampilan Blade halaman Contact
│       ├── home.blade.php            # Tampilan Blade halaman utama dengan Tailwind CSS CDN
│       └── welcome.blade.php         # Tampilan Blade bawaan awal instalasi Laravel
├── routes/
│   ├── console.php                   # Pendaftaran perintah berbasis CLI (Artisan Commands)
│   └── web.php                       # Pendaftaran rute URL web ('/', '/about', '/contact', '/hello/{nama}')
├── storage/                          # Tempat penyimpanan berkas log internal, cache session, dan upload
├── tests/                            # Berkas pengujian otomatis (Unit Test & Feature Test)
├── .env                              # Berkas rahasia konfigurasi lingkungan lokal (MySQL, App Key)
├── .env.example                      # Templat contoh konfigurasi environment
├── .gitignore                        # Berkas pendaftar folder/file yang diabaikan oleh Git
├── artisan                           # Antarmuka CLI bawaan Laravel
├── composer.json                     # Berkas pendaftar dependensi paket PHP
├── composer.lock                     # Berkas pengunci versi pasti paket Composer
└── README.md                         # Berkas dokumentasi utama proyek di GitHub
```

---

## 👨‍💻 Identitas Pembuat

- **Nama:** Revaldo Ginting
- **NIM:** 4253250033
- **Kelas:** PSIK 25B
- **Program Studi:** Ilmu Komputer
- **Fakultas:** FMIPA - Universitas Negeri Medan
- **GitHub:** [@ValdoMilo](https://github.com/ValdoMilo)

---
*Dibuat untuk memenuhi Tugas Rutin 9 Mata Kuliah Pemrograman Web.*

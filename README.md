```markdown
# 🎓 EduStyle AI - Sistem Diagnosis Gaya Belajar Siswa

EduStyle AI adalah aplikasi berbasis web yang dirancang untuk menganalisis gaya belajar dominan siswa (Visual, Auditori, Kinestetik). Aplikasi ini menggunakan **Google Gemini AI** untuk menghasilkan laporan psikologi pendidikan yang mendalam dan dilengkapi dengan **Panel Admin** khusus bagi guru untuk memantau riwayat diagnosis secara *real-time*.

## 🚀 Fitur Utama
- **Kuis Diagnostik:** Penilaian modalitas sensorik siswa berdasarkan Kurikulum Merdeka.
- **Analisis AI (Gemini API):** Menghasilkan narasi laporan yang personal, strategi belajar, dan panduan untuk guru.
- **Dashboard Guru (Filament PHP):** Panel admin elegan untuk merekap, mencari, dan meninjau seluruh riwayat diagnosis siswa.
- **Cetak Laporan PDF:** Antarmuka *printer-friendly* yang bersih dan profesional.

## 🛠️ Teknologi yang Digunakan
- **Framework:** Laravel 11 & Livewire 3
- **Admin Panel:** Filament PHP v3
- **Frontend:** Tailwind CSS & Vite
- **Integrasi AI:** Google Gemini API (`gemini-1.5-flash`)
- **Database:** SQLite

---

## ⚙️ Persyaratan Sistem
Sebelum menjalankan proyek ini, pastikan komputer Anda sudah terinstal:
- PHP >= 8.2
- Composer
- Node.js & NPM
- Git
- Akun Google (untuk mendapatkan Gemini API Key)

---

## 📖 Panduan Instalasi & Setup (Lokal)

Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi:

### 1. Clone & Install Dependensi
```bash
git clone <url-repository-kamu>
cd edustyle-ai
composer install
npm install

```

### 2. Setup Environment Variables (.env)

```bash
cp .env.example .env
php artisan key:generate

```

### 3. 🔑 Setup Google Gemini API Key (Wajib)

1. Dapatkan API Key gratis dari [Google AI Studio](https://aistudio.google.com/app/apikey).
2. Buka file `.env`, cari atau tambahkan baris berikut, lalu tempel kunci Anda:

```env
GEMINI_API_KEY=AIzaSy_PASTE_KUNCI_KAMU_DISINI

```

3. Bersihkan *cache* konfigurasi:

```bash
php artisan config:clear

```

### 4. Setup Database & Akun Tester

Jalankan perintah ini secara berurutan untuk menyiapkan *database* SQLite, melakukan migrasi tabel, dan menyuntikkan akun tester ke dalam sistem:

```bash
touch database/database.sqlite
php artisan migrate

# Jalankan perintah ini untuk membuat akun Guru/Admin otomatis
php artisan tinker --execute="App\Models\User::create(['name'=>'Guru Admin', 'email'=>'admin@sekolah.com', 'password'=>bcrypt('admin123')]);"

```

### 5. Jalankan Aplikasi

Gunakan *script shortcut* yang sudah disediakan untuk menyalakan server backend dan frontend sekaligus:

```bash
./run-local.sh

```

*(Jika script gagal karena permission, jalankan `chmod +x run-local.sh` terlebih dahulu).*

---

## 🔐 Akses Tester (Dashboard Guru)

Untuk mencoba fitur panel admin (melihat riwayat hasil tes siswa), silakan akses URL berikut dan gunakan kredensial tester yang sudah di-*generate* pada langkah ke-4:

* **URL Panel:** `http://127.0.0.1:8000/admin`
* **Email:** `admin@sekolah.com`
* **Password:** `admin123`

---

**Dikembangkan oleh Dafha Febyhansyah | PPLG SMK**

```

```
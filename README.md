# 🎓 EduStyle AI - Sistem Diagnosis Gaya Belajar Siswa

EduStyle AI adalah aplikasi berbasis web yang dirancang untuk menganalisis gaya belajar dominan siswa (Visual, Auditori, Kinestetik). Aplikasi ini menggunakan **Google Gemini AI** untuk menghasilkan laporan psikologi pendidikan yang mendalam, memberikan rekomendasi strategi belajar, penyesuaian lingkungan sekolah, hingga panduan spesifik bagi guru/instruktur.

## 🚀 Fitur Utama
- **Kuis Diagnostik:** Penilaian modalitas sensorik siswa berdasarkan Kurikulum Merdeka.
- **Analisis AI (Gemini API):** Menghasilkan narasi laporan yang personal dan mendalam.
- **Cetak Laporan PDF:** Antarmuka *printer-friendly* yang bersih dan profesional.
- **Responsive UI:** Dibangun dengan Tailwind CSS untuk tampilan yang optimal di berbagai perangkat.

## 🛠️ Teknologi yang Digunakan
- **Framework:** Laravel (PHP 8.x) & Livewire 3
- **Frontend:** Tailwind CSS & Vite
- **Integrasi AI:** Google Gemini API (`gemini-pro` / `gemini-1.5-flash`)

---

## ⚙️ Persyaratan Sistem (Prerequisites)
Sebelum menjalankan proyek ini, pastikan komputer Anda sudah terinstal:
- PHP >= 8.2
- Composer
- Node.js & NPM
- Git
- Akun Google (untuk mendapatkan Gemini API Key gratis)

---

## 📖 Panduan Instalasi & Setup (Langkah Demi Langkah)

Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi di komputer lokal (*localhost*):

### 1. Clone & Masuk ke Folder Proyek
```bash
git clone <url-repository-kamu>
cd edustyle-ai
```

### 2. Install Dependensi PHP dan Node.js
Buka terminal dan jalankan kedua perintah ini:
```bash
composer install
npm install
```

### 3. Setup Environment Variables (.env)
Aplikasi membutuhkan file `.env` untuk menyimpan konfigurasi dan API Key rahasia.
```bash
cp .env.example .env
```
Lalu, *generate application key* bawaan Laravel:
```bash
php artisan key:generate
```

### 4. 🔑 SETUP GOOGLE GEMINI API KEY (WAJIB)
Aplikasi tidak akan bisa menghasilkan laporan jika API Key AI belum dimasukkan. 

1. Kunjungi website Google AI Studio: **[https://aistudio.google.com/app/apikey](https://aistudio.google.com/app/apikey)**
2. Login menggunakan akun Google Anda.
3. Klik tombol **"Create API key"** dan salin teks kuncinya (biasanya berawalan `AIzaSy...`).
4. Buka file `.env` di *code editor* Anda (VS Code / Neovim).
5. Cari atau tambahkan baris berikut, lalu tempel (*paste*) kunci Anda di sana:

```env
GEMINI_API_KEY=AIzaSy_PASTE_KUNCI_KAMU_DISINI
```
*(Catatan: Pastikan tidak ada spasi atau tanda kutip di sekitar kunci).*

6. Setelah file `.env` disimpan, bersihkan *cache* konfigurasi Laravel agar kunci baru terbaca:
```bash
php artisan config:clear
```

### 5. Jalankan Aplikasi!
Kamu bisa menjalankan aplikasi ini dengan mudah menggunakan *script shortcut* yang sudah disediakan. Jalankan perintah ini di terminal:

```bash
./run-local.sh
```
*Script* ini akan otomatis menjalankan backend Laravel (`serve`), frontend Vite (`dev`), dan langsung membuka browser kamu di `http://127.0.0.1:8000`.

*(Jika script gagal karena masalah permission, ketik `chmod +x run-local.sh` terlebih dahulu).*

---

## 🛑 Troubleshooting (Masalah yang Sering Terjadi)

- **Error 503 (Service Unavailable):** Ini berarti server AI Google sedang penuh/sibuk. Tunggu 1-2 menit lalu coba *generate* ulang.
- **Error 400 (API Key Invalid):** Kunci yang kamu masukkan di `.env` salah atau bukan format Gemini (wajib berawalan `AIzaSy...`). Periksa kembali file `.env` lalu jalankan `php artisan config:clear`.
- **Tampilan Berantakan:** Pastikan kamu sudah menjalankan `npm run dev` (atau `./run-local.sh`) agar Tailwind CSS ter-compile dengan benar.

---
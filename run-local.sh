#!/bin/bash

echo "🚀 Memulai EduStyle AI Local Environment..."

# Menjalankan Vite (Tailwind/Frontend) di background
echo "📦 Menjalankan Vite (npm run dev)..."
npm run dev &
VITE_PID=$!

# Menjalankan Laravel Server di background
echo "🐘 Menjalankan Laravel Server (php artisan serve)..."
php artisan serve &
LARAVEL_PID=$!

# Jeda 2 detik untuk memastikan server sudah siap
sleep 2

# Membuka browser otomatis sesuai OS yang kamu pakai (Arch/Void Linux, Windows, atau Mac)
echo "🌐 Membuka browser..."
if command -v xdg-open > /dev/null; then
    xdg-open http://127.0.0.1:8000
elif command -v start > /dev/null; then
    start http://127.0.0.1:8000
elif command -v open > /dev/null; then
    open http://127.0.0.1:8000
else
    echo "Tolong buka browser manual ke: http://127.0.0.1:8000"
fi

echo "✅ Sistem berjalan dengan lancar! Tekan [CTRL + C] untuk mematikan semuanya."

# Fungsi Trap: Mematikan Laravel & Vite otomatis saat kamu menekan CTRL+C
trap "echo -e '\n🛑 Mematikan server Laravel dan Vite...'; kill $LARAVEL_PID $VITE_PID; exit" INT

# Menahan terminal agar tidak langsung keluar
wait
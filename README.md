# Lab Tools Management

Aplikasi web untuk mengelola data alat laboratorium menggunakan framework Laravel.

Proyek ini dibuat untuk memenuhi **Tugas Besar Perancangan Web (PAW)**  
Semester Ganjil Tahun Akademik 2025/2026.

## ⚙️ Teknologi
- Laravel
- Bootstrap
- MySQL
- Laravel Breeze (Auth)
- REST API
- Git & GitHub
- 
## ✨ Fitur
- Login & Register
- CRUD Data Alat Laboratorium
- Proteksi halaman (Auth Middleware)
- REST API Data Tools

## 🔗 REST API
- `GET /api/tools` → Menampilkan data alat (JSON)

## ▶️ Cara Menjalankan
```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve


http://127.0.0.1:8000


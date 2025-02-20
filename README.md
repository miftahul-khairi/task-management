# Task Management API

## 📌 Prerequisites
Pastikan Anda telah menginstal software berikut sebelum menjalankan proyek ini:

- PHP (>=8.2) 👉 **Cek dengan** `php -v`
- Composer 👉 **Cek dengan** `composer -V`
- XAMPP (untuk MariaDB dan Apache)

## 📥 Clone Repository
Jika Anda belum memiliki kode sumber, clone menggunakan Git:
```bash
cd C:\xampp\htdocs
git clone https://github.com/username/task-management.git
cd task-management
```

## ⚙️ Instalasi Dependensi
Jalankan perintah berikut untuk menginstal dependensi Laravel:
```bash
composer install
```

## 🔑 Konfigurasi Environment
1. Duplikat file `.env.example` menjadi `.env`
2. Atur konfigurasi database di `.env` sesuai dengan MariaDB di XAMPP:

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_management
DB_USERNAME=root
DB_PASSWORD=
```

3. Generate application key:
```bash
php artisan key:generate
```

## 🛠️ Menyiapkan Database
1. Pastikan MariaDB berjalan di XAMPP.
2. Buka phpMyAdmin melalui browser:
   ```
   http://localhost/phpmyadmin
   ```
3. Buat database baru dengan nama **`task_management`** (jika belum ada).
4. Jalankan migrasi untuk membuat tabel:
   ```bash
   php artisan migrate --seed
   ```
   > **Catatan:** `--seed` digunakan jika ada data awal yang perlu diisi.

## 🚀 Menjalankan Server Laravel
Jalankan server Laravel menggunakan:
```bash
php artisan serve
```
Akses proyek di:
```
http://127.0.0.1:8000
```

## 📡 Menjalankan API
Untuk menguji API, gunakan Postman atau akses endpoint default Laravel:
```bash
GET http://127.0.0.1:8000/api/
```

## 🛠️ Menjalankan Frontend (Opsional)
Jika ada frontend berbasis React/Vue:
```bash
cd frontend
npm install
npm run dev
```

## 🏁 Selesai!


# TALL Stack Base

## Pendahuluan
Proyek ini adalah implementasi konsep TALL (Tailwind CSS, Alpine.js, Livewire, Laravel) dalam sebuah aplikasi manajemen tugas. Tujuan dari proyek ini adalah untuk mempelajari dan menerapkan teknologi TALL dalam membangun aplikasi web yang responsif dan interaktif.

## Fitur
- **Manajemen Tugas**: Pengguna dapat membuat, membaca, memperbarui, dan menghapus tugas.

## Teknologi yang Digunakan
- **Laravel**: Framework PHP yang digunakan untuk pengembangan backend.
- **Livewire**: Untuk membangun antarmuka pengguna dinamis tanpa harus menulis JavaScript.
- **Alpine.js**: Untuk menambah interaktivitas pada halaman web.
- **Tailwind CSS**: Framework CSS untuk styling yang cepat dan mudah.

## Persyaratan
Sebelum memulai, pastikan Anda memiliki hal-hal berikut:
- PHP >= 8.1
- Composer
- Node.js dan npm
- Database (PostgreSQL)

## Instalasi
Ikuti langkah-langkah berikut untuk menginstal proyek ini:

1. Clone repositori ini:
    ```bash
    git clone https://github.com/mogams99/tall-stack-base.git
    ```

2. Masuk ke direktori proyek:
    ```bash
    cd tall-stack-base
    ```

3. Instal dependensi PHP:
    ```bash
    composer install
    ```

4. Instal dependensi JavaScript:
    ```bash
    npm install
    ```

5. Salin file `.env.example` ke `.env` dan sesuaikan konfigurasi database:
    ```bash
    cp .env.example .env
    ```

6. Generate kunci aplikasi:
    ```bash
    php artisan key:generate
    ```

7. Migrasi database:
    ```bash
    php artisan migrate
    ```

8. Jalankan server:
    ```bash
    php artisan serve
    ```

## Penggunaan
Setelah menjalankan aplikasi, buka browser Anda dan akses `http://localhost:8000`. Anda dapat mendaftar sebagai pengguna baru atau masuk jika Anda sudah memiliki akun.

## Penutup
Terima kasih telah membaca! Semoga proyek ini bermanfaat dan menjadi referensi yang baik dalam memahami konsep TALL Stack.
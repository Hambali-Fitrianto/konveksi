# Konveksi Laravel Project

Aplikasi Konveksi menggunakan Laravel untuk mempermudah pengelolaan pemesanan pakaian custom.

## Fitur
- Registrasi pengguna dan login.
- Manajemen produk konveksi.
- Pemesanan custom produk.

## Instalasi

1. Clone repository ini:
    ```bash
    git clone https://github.com/Hambali-Fitrianto/konveksi.git
    ```

2. Masuk ke folder project:
    ```bash
    cd konveksi
    ```

3. Install dependensi dengan Composer:
    ```bash
    composer install
    ```

4. Salin file `.env.example` ke `.env`:
    ```bash
    cp .env.example .env
    ```

5. Generate key aplikasi:
    ```bash
    php artisan key:generate
    ```

6. Jalankan migrasi untuk membuat tabel di database:
    ```bash
    php artisan migrate
    ```

7. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

## Penggunaan
Akses aplikasi di browser Anda di `http://127.0.0.1:8000`.

## Kontribusi
Jika Anda ingin berkontribusi pada project ini, silakan buat *fork*, buat perubahan, dan kirimkan *pull request*.

## Lisensi
Project ini dilisensikan di bawah MIT License - lihat file [LICENSE](LICENSE) untuk detail.

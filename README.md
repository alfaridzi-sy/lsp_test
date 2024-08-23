# Sistem UMKM2M

Sistem UMKM2M adalah platform yang memfasilitasi interaksi antara admin, UMKM (Usaha Mikro, Kecil, dan Menengah), dan pembeli. Sistem ini memungkinkan admin untuk mendaftarkan akun UMKM, UMKM untuk menambahkan item yang ingin dijual, dan pembeli untuk memilih dan memesan item.

## Fitur Utama

1. **Pendaftaran Akun UMKM**
    - Admin dapat mendaftarkan akun UMKM baru.
    - Setiap UMKM akan memiliki akses untuk mengelola data item yang dijual.

2. **Manajemen Item**
    - UMKM dapat menambahkan, mengedit, dan menghapus item yang ingin dijual.
    - Item dapat mencakup nama, deskripsi, harga, dan gambar.

3. **Pemilihan dan Pemesanan Item**
    - Pembeli dapat melihat daftar item yang tersedia.
    - Pembeli dapat memilih item yang diinginkan dan melakukan pemesanan.

## Instalasi

1. **Clone Repository**
    git clone https://github.com/alfaridzi-sy/umkm-simarimbun.git

2. **Install Dependensi**
    Pastikan Anda telah menginstal semua dependensi yang diperlukan. Jika Anda menggunakan composer:
    - cd umkm-simarimbun
    - composer install

3. **Konfigurasi Database**
    Konfigurasikan database sesuai dengan pengaturan sistem Anda. Edit file konfigurasi yang diperlukan.

4. **Menjalankan Aplikasi**
    Setelah semua konfigurasi selesai, jalankan aplikasi dengan:
    - php artisan key:generate --ansi
    - php artisan migrate --seed 
    - php artisan serve

## Penggunaan

1. **Login Sebagai Admin**
	- Akses halaman admin untuk mendaftarkan UMKM.
	- Setelah pendaftaran, admin dapat mengelola data UMKM dan item.
2. **Login sebagai UMKM**
	- UMKM dapat login dan mulai menambahkan item mereka ke dalam sistem.
	- Mereka dapat mengelola item yang terdaftar, termasuk mengubah harga dan deskripsi.
3. **Login sebagai Pembeli**
    - Pembeli dapat menelusuri item yang tersedia.
	- Mereka dapat memilih item, menambahkan ke keranjang, dan melakukan pemesanan.

## Struktur Direktori
	1. /config - File konfigurasi
	2. /public - File statis, seperti gambar dan CSS
	3. /resources/views - Template tampilan

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat pull request atau buka isu untuk diskusi lebih lanjut.

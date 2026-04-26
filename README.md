# Todo List App

Aplikasi todo list berbasis web dengan fitur autentikasi user.

## Fitur

- Register & Login
- Tambah, selesaikan, dan hapus todo
- Setiap user hanya bisa lihat todo miliknya sendiri

## Tech Stack

- Laravel 11
- MySQL
- Tailwind CSS
- Laravel Breeze (Auth)

## Cara Menjalankan

1. Clone repository ini
2. `composer install`
3. `cp .env.example .env`
4. `php artisan key:generate`
5. Setting database di `.env`
6. `php artisan migrate`
7. `php artisan serve`

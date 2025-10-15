# Desafio 1 — Laravel + White Dashboard + SQLite

## Stack
- Laravel 11, Breeze (Blade), White Dashboard (preset), SQLite

## Setup rápido
```bash
composer install
cp .env.example .env
php artisan key:generate

# SQLite
type NUL > database\database.sqlite
# Atualize .env: DB_CONNECTION=sqlite
php artisan migrate --seed
npm install && npm run build
php artisan serve

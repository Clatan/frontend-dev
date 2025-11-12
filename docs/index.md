# Documentation Project: Management Product

## Instalitation
- **Untuk Project**
>> php artisan serve
>> php artisan make:controller ProductController

- **Untuk FrontEnd**
>> npm install
>> npm install -D tailwindcss postcss autoprefixer
>> npx tailwindcss init
>> npm install jquery datatables.net datatables.net-dt
>> npm run dev

---

## Modules
- **Product Module**
  - File Blade: `resources/views/product/*.blade.php`
  - Controller: `app/Http/Controllers/ProductController.php`
  - Routes: `routes/web.php` (Route name: `product.index`, `add.product`)

---

## Dummy Data
Tabel `products`:
| Column        | Type        | Description  |
|---------------|-------------|--------------|
| id_product    | integer     | Primary Key  |
| name_product  | string      | Nama Produk  |
| price_product | integer     | Harga Produk |
| stock_product | integer     | Stock Produk |
|  created_at   | timestamp   | Waktu dibuat |

---

## PDF Reference
Untuk penjelasan singkat struktur:

[PDF](./PenjelasanProject.pdf)

# CRUD Laravel Livewire

## 0. Setup
Repositori ini dibangun dengan Laravel versi 6.02 ke atas. Setelah melakukan fork dan clone dari repositori ini, lakukanlah langkah-langkah di bawah ini untuk menjalankan project. 

* masuk ke direktori CRUD-Laravel-livewire
```bash
$ cd CRUD-Laravel-livewire
```
* jalankan perintah composer install untuk mendownload direktori vendor
```bash
$ composer install
```
* buat file .env lalu isi file tersebut dengan seluruh isi dari file .env.example

* jalankan perintah php artisan key generate
```bash
$ php artisan key:generate
```

* Tambahan: Untuk pengerjaan di laptop/PC masing-masing, sesuaikan nama database, username dan password nya di file .env dengan database kalian. 

Setelah itu lakukan migrate ke database
```bash
$ php artisan migrate
```

jangan lupa untuk menjalankan server laravel untuk memulai.
```bash
$ php artisan serve
```

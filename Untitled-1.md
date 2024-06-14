Langkah 1 : Membuat tabel pada database
Langkah 2 : masuk ke database dan tulsikan baris kode composer create-project --prefer-dist laravel/laravel percobaan "6.*" untuk 
            Membuat project baru dengan framework larafel
Langkah 3 : masuk ke folder dengan cd namafoler
Langkah 4 : Masuk ke laravel dengan code . lalu enter
Langkah 5 : Mengkoneksikan ke database dengan env > DB_Database diganti dengan nama database yang dibuat
Langkah 6 : Membuat migration. database > migration, 
            dengan menuliskan baris kode pada terminal php artisan make:migration create_(namatabel)_table.
            Isi dengan $table->string('nim', 10); yang disesuaikan dengan data, kemudian menjalankan migration dengan php artisan migrate
Langkah 7 : Membuat seeding (menyisipkan data pada database dengan data dummy), 
            php artisan make:seeder katalog. Bisa dilihat pada file seed movies
            
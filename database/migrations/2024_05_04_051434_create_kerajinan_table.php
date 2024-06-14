<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerajinanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('kerajinan', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('nama_produk', 50);
        $table->string('ukuran', 50);
        $table->text('deskripsi', 100);
        $table->string('fungsi', 100);
        $table->unsignedInteger('harga');
        $table->unsignedInteger('stok');
        $table->string('bahan', 50);
        $table->string('asal_daerah', 50);
        $table->string('gambar', 100);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kerajinan');
    }
}

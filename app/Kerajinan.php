<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kerajinan extends Model
{
    protected $table = 'kerajinan';

    protected $fillable = [
                            'nama_produk', 
                            'ukuran', 
                            'deskripsi', 
                            'fungsi', 
                            'harga', 
                            'stok', 
                            'bahan',
                            'asal_daerah',
                            'gambar'
                          ];
}

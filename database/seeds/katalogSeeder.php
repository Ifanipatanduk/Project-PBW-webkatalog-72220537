<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class katalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            DB::table('kerajinan')->insert([
                'nama_produk' => $faker->word,
                'ukuran' => $faker->numerify('## cm'),
                'deskripsi' => $faker->sentence,
                'fungsi' => $faker->sentence,
                'harga' => $faker->numberBetween(10000, 10000000),
                'stok' => $faker->numberBetween(1, 20),
                'bahan' => $faker->word,
                'asal_daerah' => $faker->city,
                'gambar' => $faker->url()
        ]);
    }
}
}
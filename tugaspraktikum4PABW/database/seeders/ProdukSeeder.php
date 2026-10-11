<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $kategoriIds = DB::table('kategori')->pluck('id')->toArray();

        for ($i = 0; $i < 15; $i++) {
            DB::table('produk')->insert([
                'kategori_id'      => $faker->randomElement($kategoriIds),
                'nama'             => ucwords($faker->words(2, true)),
                'deskripsi'        => $faker->sentence(10),
                'harga'            => $faker->numberBetween(5, 100) * 1000,
                'stok'             => $faker->numberBetween(0, 200),
                'tanggal_produksi' => $faker->date('Y-m-d', 'now'),
                'created_at'       => now(),
                'updated_at'       => now(),
            ]);
        }
    }
}
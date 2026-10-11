<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $daftar = ['Makanan Berat', 'Makanan Ringan', 'Minuman', 'Dessert', 'Paket Hemat'];

        foreach ($daftar as $nama) {
            DB::table('kategori')->insert([
                'nama'       => $nama,
                'deskripsi'  => $faker->sentence(8),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
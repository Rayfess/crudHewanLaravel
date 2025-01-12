<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("hewan")->insert([
            [
                "nama_hewan" => "Singa",
                'jenis_hewan' => 'Karnivora',
                'berat_hewan' => '90',
                'panjang_hewan' => '120',
                'deskripsi_hewan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ratione aliquid fugit itaque dignissimos a voluptatem. Sunt esse architecto iusto molestias omnis sapiente blanditiis atque, autem reiciendis tenetur, quasi possimus?',
                'created_at' => now(),
            ],
            [
                "nama_hewan" => "Koala",
                'jenis_hewan' => 'Herbivora',
                'berat_hewan' => '35',
                'panjang_hewan' => '80',
                'deskripsi_hewan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ratione aliquid fugit itaque dignissimos a voluptatem. Sunt esse architecto iusto molestias omnis sapiente blanditiis atque,',
                'created_at' => now(),
            ]
        ]);
    }
}

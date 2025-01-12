<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                'name' => 'Suciipto',
                'email' => 'jaya@gmail.com',
                "email_verified_at" => now(),
                'password' => 'fu123',
                'created_at' => now(),
                "remember_token" => Str::random(10),
            ],
        ]);
        User::factory(2)->create();
    }
}

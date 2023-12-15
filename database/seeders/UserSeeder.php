<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                "name" => "Admin Facer",
                "email" => "adminfacer@gmail.com",
                "password" => Hash::make("Password123"),
                "is_admin" => true,
            ],
            [
                "name" => "Debby Marlina",
                "email" => "debby@gmail.com",
                "password" => Hash::make("Password123"),
                "is_admin" => false,
            ],
        ]);
    }
}

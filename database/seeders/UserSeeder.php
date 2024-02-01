<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FacadesDB::table('users')->insert([
            [
                'name' => 'Muhammad Ari Tri Pajar',
                'email' => 'Ari@example.com',
                'role' => 'admin',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Adhelwaes',
                'email' => 'Adhel@example.com',
                'role' => 'admin',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Rian Saputra',
                'email' => 'rian@example.com',
                'role' => 'guest',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Kelompok MP',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'Iqbal Saputra',
                'email' => 'Iballs@gmail.com',
                'role' => 'guest',
                'password' => bcrypt('12345678'),
            ],
        ]);
    }
}

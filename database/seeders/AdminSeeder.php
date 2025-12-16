<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin; // <-- INI YANG KURANG

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
    'name' => 'Super Admin',
    'email' => 'admin@lasicatrip.com',
    'password' => bcrypt('password123'),
]);
    }
}

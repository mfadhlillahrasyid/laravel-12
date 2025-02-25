<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::updateOrCreate(
            ['email' => 'muhammadfadhlillahrasyid@gmail.com'], // Cek apakah email sudah ada
            [
                'name' => 'Fadhli',
                'email' => 'muhammadfadhlillahrasyid@gmail.com',
                'password' => Hash::make('1234567890'), // Bcrypt otomatis
            ]
        );
    }
}

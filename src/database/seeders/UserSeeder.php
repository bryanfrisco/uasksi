<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus dulu user dengan email ini jika sudah ada, biar gak dobel
        User::where('email', 'admin@admin.com')->delete();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'), // <- ini yang kamu pakai nanti buat login
        ]);
    }
}

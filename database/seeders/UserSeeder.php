<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

            'name' => "Andrés Felipe",
            'last_name' => "Cardona",
            'address' => "Cr 48 #87-47",
            'cellphone' => "3046406545",
            'email' => "11cardona31@gmail.com",
            'email_verified_at' => now(),
            'document' => "1032011946",
            'document_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,


        ])->assignRole('Admin');

        User::create([

            'name' => "Alejandro",
            'last_name' => "Yepes",
            'address' => "Cr 4 #17-22",
            'cellphone' => "3000000000",
            'email' => "yepes@gmail.com",
            'email_verified_at' => now(),
            'document' => "1033011946",
            'document_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,


        ])->assignRole('Comprador');

        User::create([

            'name' => "Cristian",
            'last_name' => "Gomez",
            'address' => "Cr 4 #17-22",
            'cellphone' => "3000000000",
            'email' => "cristian@gmail.com",
            'document' => "1034011946",
            'document_verified_at' => now(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'profile_photo_path' => null,
            'current_team_id' => null,


        ])->assignRole('Vendedor');
    }
}

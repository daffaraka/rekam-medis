<?php

namespace Database\Seeders;

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
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'Admin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Perawat',
            'email' => 'perawat@perawat.com',
            'password' => Hash::make('password'),
            'role' => 'Perawat',
        ]);
    }
}

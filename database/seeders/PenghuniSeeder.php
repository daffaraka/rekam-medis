<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenghuniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $statuses = ['Aktif', 'Dirawat Inap', 'Keluar', 'Meninggal Dunia'];

        for ($i = 1; $i <= 10; $i++) {
            \App\Models\Penghuni::create([
                'nama' => "Penghuni {$i}",
                'foto' => "path/to/foto{$i}.jpg",
                'umur' => rand(20, 50),
                'tanggal_lahir' => now()->subYears(rand(20, 50))->format('Y-m-d'),
                'jenis_kelamin' => $i % 2 == 0 ? 'Laki-laki' : 'Perempuan',
                'status' => $statuses[rand(0, count($statuses) - 1)],
            ]);
        }
    }
}

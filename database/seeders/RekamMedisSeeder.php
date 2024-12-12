<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RekamMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            \App\Models\RekamMedis::create([
                'nama' => "Pasien {$i}",
                'keluhan' => "Keluhan {$i}",
                'diagnosis' => "Diagnosis {$i}",
                'tanggal_tindakan' => now()->subDays($i),
                'status' => $i % 2 == 0 ? 'sehat' : 'dalam perawatan',
            ]);
        }
    }
}

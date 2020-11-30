<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kualifikasi;

class KualifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kualifikasi::create([
          'name' => 'Diploma 3 (D3)'
        ]);
        Kualifikasi::create([
          'name' => 'Diploma 2 (D2)'
        ]);
        Kualifikasi::create([
          'name' => 'Diploma 1 (D1)'
        ]);
        Kualifikasi::create([
          'name' => 'Doktor (S3)'
        ]);
        Kualifikasi::create([
          'name' => 'Magister (S2)'
        ]);
        Kualifikasi::create([
          'name' => 'Sarjana (S1)'
        ]);
        Kualifikasi::create([
          'name' => 'SMK/SMA/MA/Sedejat'
        ]);
    }
}

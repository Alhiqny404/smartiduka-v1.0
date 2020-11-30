<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
          'name' => 'Web Devloper',
          'slug' => 'web-devloper'
        ]);
        Kategori::create([
          'name' => 'Web Desainer',
          'slug' => 'web-desainer'
        ]);
        Kategori::create([
          'name' => 'Mobile Devloper',
          'slug' => 'mobile-devloper'
        ]);
        Kategori::create([
          'name' => 'Lainnya',
          'slug' => 'lainnya'
        ]);

    }
}

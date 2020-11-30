<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StatusNikah;

class StatusNikahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        StatusNikah::create([
          'name' => 'Sudah Menikah'
        ]);
         StatusNikah::create([
          'name' => 'Belum Menikah'
        ]);
          StatusNikah::create([
          'name' => 'Cerai Hidup'
        ]);
           StatusNikah::create([
          'name' => 'Cerai Mati'
        ]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $super_admin = User::create([
          'username' => 'superAdmin39',
          'email' => 'super_admin@iduka.com',
          'password' => bcrypt('super_admin'),
          'email_verified_at' => '2020-11-11 05:43:32.000000'
        ]);
        
        $super_admin->assignRole('super_admin');
        
        $admin = User::create([
          'username' => 'admin39',
          'email' => 'admin@iduka.com',
          'password' => bcrypt('admin'),
          'email_verified_at' => '2020-11-11 05:43:33.000000'
        ]);
        
        $admin->assignRole('admin');

        
    }
}

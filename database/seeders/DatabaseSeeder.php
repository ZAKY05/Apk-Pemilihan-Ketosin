<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminat\Support\Facades\auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\pemilih;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=>'Alif zaky',
            'email'=>'zaky@gmail.com',
            'password'=>Hash::make('12345')

        ]);
        User::create([
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>Hash::make('12')

        ]);

        pemilih::create([
            'name'=>'zaky',
            'email'=>'pemilih@gmail.com',
            'password'=>Hash::make('123'),
            'NISN'=>'456',
            'alamat'=>'alamatnya'
        ]);

        
    }
}

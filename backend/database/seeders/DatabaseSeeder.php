<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agama;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Arif Aldini',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('mmmmmmmm'),
            'role' => 'admin',
            'is_aktif' => true,
            'foto' => 'modul3_3.jpg'
        ]);

        \App\Models\User::factory(10)->create();


        Agama::factory()->create([
            'nama_agama' => 'Islam'
        ]);
        Agama::factory()->create([
            'nama_agama' => 'Kristen'
        ]);
        Agama::factory()->create([
            'nama_agama' => 'Hindu'
        ]);
    }
}
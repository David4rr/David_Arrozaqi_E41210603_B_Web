<?php

namespace Database\Seeders;

use App\Models\detail_profile;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        detail_profile::create([
            'address' => 'Jember',
            'nomor_tlp' => '081455165124',
            'ttl' => '2003-04-03',
            'foto' => 'picture.png'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('countries')->insert([
            ['name' => 'United States', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Canada', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Germany', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'France', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Japan', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

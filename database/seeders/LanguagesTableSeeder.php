<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LanguagesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('languages')->insert([
            [
                'name' => 'العربية',
                'created_at' => now(),
                'updated_at' =>now(),
            ],
            [
                'name' => 'الإنجليزية',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
        ]);
    }
}

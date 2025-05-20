<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectorSeeder extends Seeder
{
    public function run(): void
    {
        $sectors = [
            'حكومي',
            'خاص',
            'غير ربحي',
        ];

        foreach ($sectors as $sector) {
            DB::table('sectors')->insert([
                'name' => $sector,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

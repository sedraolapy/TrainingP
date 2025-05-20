<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            'تدريب',
            'كوتشينغ',
            'توجيه',
            'استشارات',
        ];

        foreach ($services as $service) {
            DB::table('services')->insert([
                'name' => $service,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

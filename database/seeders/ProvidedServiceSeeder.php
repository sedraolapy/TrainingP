<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvidedServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            'تدريب',
            'كوتشينغ',
            'توجيه',
            'استشارات',
        ];

        foreach ($services as $service) {
            DB::table('provided_services')->insert([
                'name' => $service,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

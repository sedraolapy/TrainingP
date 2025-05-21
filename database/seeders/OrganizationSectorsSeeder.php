<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationSectorsSeeder extends Seeder
{
    public function run(): void
    {
        $sectors = [
            'التعليم والتدريب',
            'الصحة واللياقة',
            'التكنولوجيا والرقمنة',
            'الموارد البشرية والتطوير الوظيفي',
            'الأعمال والاستشارات الإدارية',
            'القطاع المالي والمصرفي',
            'القطاع الحكومي والخدمات العامة',
            'القطاع الاجتماعي والتنمية',
        ];

        foreach ($sectors as $sector) {
            DB::table('organization_sectors')->insert([
                'name' => $sector,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
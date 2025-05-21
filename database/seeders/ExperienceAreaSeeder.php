<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExperienceArea;
use Illuminate\Support\Facades\DB;

class ExperienceAreaSeeder extends Seeder
{
    public function run()
    {
        $experienceAreas = [
            'الدعم الإداري للتدريب',
            'التنسيق اللوجستي',
            'إعداد المحتوى التدريبي',
            'المتابعة والتقييم',
            'التسويق للتدريبات',
            'الدعم الفني',
            'المجال المحدد للتدريب',
            'اللغات والترجمة',
        ];

        foreach ($experienceAreas as $experienceArea) {
            DB::table('experience_areas')->insert([
                'name' => $experienceArea,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationLevelSeeder extends Seeder
{
    public function run(): void
    {
        $levels = [
            'ثانوي',
            'دبلوم',
            'بكالوريوس',
            'ماجستير',
            'دكتوراه',
        ];

        foreach ($levels as $level) {
            DB::table('education_levels')->insert([
                'name' => $level,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

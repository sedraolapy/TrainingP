<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeNumberSeeder extends Seeder
{
    public function run(): void
    {
        $ranges = [
            '1-10',
            '11-50',
            '51-100',
            '101-500',
            'أكثر من 500',
        ];

        foreach ($ranges as $range) {
            DB::table('employee_numbers')->insert([
                'range' => $range,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

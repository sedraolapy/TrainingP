<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FieldOfWorkSeeder extends Seeder
{
    public function run(): void
    {
        $fields = [
            'تعليم',
            'صحة',
            'تقنية',
            'تسويق',
            'إدارة',
            'مالية',
        ];

        foreach ($fields as $field) {
            DB::table('fields_of_work')->insert([
                'name' => $field,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

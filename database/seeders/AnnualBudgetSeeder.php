<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnualBudgetSeeder extends Seeder
{
    public function run(): void
    {
        $budgets = [
            'أقل من 10,000',
            '10,000 - 50,000',
            '50,000 - 100,000',
            'أكثر من 100,000',
        ];

        foreach ($budgets as $budget) {
            DB::table('annual_budgets')->insert([
                'name' => $budget,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

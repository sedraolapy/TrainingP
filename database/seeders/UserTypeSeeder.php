<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserType;

class UserTypeSeeder extends Seeder
{
    public function run()
    {
        $userTypes = [
            ['type' => 'مدرب'],   // Trainer
            ['type' => 'مساعد'],  // Assistant
            ['type' => 'متدرب'],  // Trainee
            ['type' => 'مؤسسة'],   // Organization
        ];

        foreach ($userTypes as $type) {
            UserType::firstOrCreate(['type' => $type['type']]);
        }
    }
}
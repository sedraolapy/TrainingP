<?php

namespace App\Models;

use App\Enums\Sex;
use App\Enums\TrainerStatus;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

protected $casts = [
    'sex' => Sex::class,
    'status' => TrainerStatus::class,
];


}

<?php

namespace App\Models;

use App\Enums\Sex;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{

protected $casts = [
    'sex' => Sex::class,
];

}

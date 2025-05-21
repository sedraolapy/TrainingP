<?php

namespace App\Models;

use App\Enums\Sex;
use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    protected $casts = [
        'sex' => Sex::class,
    ];
}

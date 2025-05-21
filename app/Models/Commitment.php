<?php

namespace App\Models;

use App\Enums\CommittedTo;
use Illuminate\Database\Eloquent\Model;

class Commitment extends Model
{
    protected $casts = [
        'committed_to' => CommittedTo::class,
    ];

}

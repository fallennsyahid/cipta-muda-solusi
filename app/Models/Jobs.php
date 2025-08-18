<?php

namespace App\Models;

use App\Enums\JobType;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $fillable = [
        'title',
        'type',
        'location',
        'photo',
    ];

    protected $casts = [
        'type' => JobType::class,
    ];
}

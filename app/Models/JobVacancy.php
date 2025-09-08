<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobVacancy extends Model
{
    protected $fillable = [
        'position',
        'departement',
        'location',
        'job_type',
        'salary',
        'description',
        'skills',
        'status',
    ];

    protected $casts = [
        'skills' => 'array',
    ];
}

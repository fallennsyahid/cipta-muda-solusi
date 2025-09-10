<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'project_name',
        'category',
        'other_category',
        'image',
        'description',
        'tools',
        'status',
        'event_time',
    ];

    protected $casts = [
        'tools' => 'array',
    ];
}

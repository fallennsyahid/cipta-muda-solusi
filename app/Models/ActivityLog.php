<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $fillable = [
        'action',
        'target_type',
        'target_name',
        'changes',
    ];

    protected $casts = [
        'changes' => 'array',
    ];
}

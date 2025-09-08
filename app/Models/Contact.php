<?php

namespace App\Models;

use App\Enums\ContactStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'message',
    ];

    protected $casts = [
        'status' => ContactStatus::class,
    ];
}

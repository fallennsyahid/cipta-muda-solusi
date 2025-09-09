<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name',
        'image',
        'partner_type',
        'partner_other_type',
        'partner_email',
        'partner_phone_number',
        'partner_links',
        'description',
        'status',
    ];
}

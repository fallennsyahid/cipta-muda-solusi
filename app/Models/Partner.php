<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name',
        'image',
        'partner_type',
        'partner_email',
        'partner_phone_number',
        'partner_links',
        'description',
        'status',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryPartner::class, 'category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}

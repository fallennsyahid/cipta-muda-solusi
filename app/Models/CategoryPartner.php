<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryPartner extends Model
{
    protected $fillable = ['name', 'slug', 'status'];

    public function partners()
    {
        return $this->hasMany(Partner::class, 'category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}

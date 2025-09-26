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

    public function partnerRequests()
    {
        return $this->hasMany(PartnerRequest::class, 'company_category');
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}

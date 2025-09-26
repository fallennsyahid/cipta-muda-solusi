<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerRequest extends Model
{
    protected $fillable = [
        'company_name',
        'company_email',
        'company_phone_number',
        'company_category',
        'company_link',
        'file_attachments',
        'company_status',
    ];

    public function category()
    {
        return $this->belongsTo(CategoryPartner::class, 'company_category');
    }
}

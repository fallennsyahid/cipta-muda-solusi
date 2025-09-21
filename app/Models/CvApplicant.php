<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvApplicant extends Model
{
    protected $fillable = [
        'applicant_name',
        'date_of_birth',
        'applicant_email',
        'applicant_phone_number',
        'applicant_file',
        'applicant_experience',
        'applicant_link',
        'status',
    ];
}

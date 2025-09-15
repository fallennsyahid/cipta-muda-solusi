<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicant extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'job_vacancy_id',
        'full_name',
        'email',
        'phone_number',
        'date_of_birth',
        'experience',
        'cv',
        'cover_letter',
        'link',
    ];

    public function jobVacancy()
    {
        return $this->belongsTo(JobVacancy::class);
    }
}

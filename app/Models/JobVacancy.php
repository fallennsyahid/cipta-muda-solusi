<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class JobVacancy extends Model
{
    use Searchable;

    protected $fillable = [
        'position',
        'departement',
        'location',
        'job_type',
        'contract_duration',
        'salary',
        'description',
        'skills',
        'status',
    ];

    protected $casts = [
        'skills' => 'array',
    ];

    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'position'   => $this->position,
            'departement' => $this->departement,
            'location'   => $this->location,
            'job_type'   => $this->job_type,
            'skills'     => is_array($this->skills) ? implode(', ', $this->skills) : $this->skills,
        ];
    }
}

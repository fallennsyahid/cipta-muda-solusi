<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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

    protected function skills(): Attribute
    {
        return Attribute::make(
            set: fn($value) => is_array($value) ? json_encode($value) : $value,
            get: fn($value) => json_decode($value, true)
        );
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

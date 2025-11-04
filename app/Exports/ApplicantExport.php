<?php

namespace App\Exports;

use App\Models\Applicant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ApplicantExport implements FromCollection, WithHeadings, WithMapping
{
    private $rowNumber;

    protected $jobVacancyId;

    public function __construct($jobVacancyId)
    {
        $this->jobVacancyId = $jobVacancyId;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Applicant::where('job_vacancy_id', $this->jobVacancyId)->get();
    }

    public function headings(): array
    {
        return [
            'NO',
            'Nama Lengkap',
            'Alamat Email',
            'Nomor Telepon',
            'Tanggal Lahir',
            'Pengalaman',
            'CV',
            'Foto Pelamar',
            'Link',
            'Status',
            'Posisi',
            'Melamar Pada',
            'Diterima Pada',
        ];
    }

    public function map($applicant): array
    {
        $phone = preg_replace('/^\+62/', '0', $applicant->phone_number);

        $cvUrl = $applicant->cv ? url('storage/' . $applicant->cv) : "-";

        $pictureUrl = $applicant->applicant_picture ? url('storage/' . $applicant->applicant_picture) : "-";

        return [
            ++$this->rowNumber,
            $applicant->full_name,
            $applicant->email,
            $phone,
            $applicant->date_of_birth,
            $applicant->experience,
            $cvUrl,
            $pictureUrl,
            $applicant->link,
            $applicant->status,
            $applicant->position ?? 'Belum Diterima',
            $applicant->created_at ? $applicant->created_at->format('d-m-Y') : '',
            $applicant->updated_at ? $applicant->updated_at->format('d-m-Y') : '',
        ];
    }
}

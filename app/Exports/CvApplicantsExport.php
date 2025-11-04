<?php

namespace App\Exports;

use App\Models\CvApplicant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CvApplicantsExport implements FromCollection, WithHeadings, WithMapping
{
    private $rowNumber;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return CvApplicant::select(
            'id',
            'applicant_name',
            'date_of_birth',
            'applicant_email',
            'applicant_phone_number',
            'applicant_experience',
            'applicant_link',
            'status',
            'created_at',
        )->get();
    }

    public function headings(): array
    {
        return [
            'NO',
            'Nama Pelamar',
            'Tanggal Lahir',
            'Email Pelamar',
            'Nomor Telepon Pelamar',
            'Pengalaman Pelamar',
            'Link Portfolio/Github/LinkedIn',
            'Status',
            'Tanggal Daftar',
        ];
    }

    public function map($applicant): array
    {
        // Ambil nomor asli
        $phone = preg_replace('/\s+|-/', '', $applicant->applicant_phone_number);

        // Jika nomor diawali dengan +62
        if (strpos($phone, '+62') === 0) {
            $phone = '0' . substr($phone, 3);
        }
        // Jika nomor diawali dengan 62 (tanpa +)
        elseif (strpos($phone, '62') === 0) {
            $phone = '0' . substr($phone, 2);
        }

        return [
            ++$this->rowNumber,
            $applicant->applicant_name,
            $applicant->date_of_birth
                ? \Carbon\Carbon::parse($applicant->date_of_birth)->format('d-m-Y') : '',
            $applicant->applicant_email,
            // $applicant->applicant_phone_number,
            $phone,
            $applicant->applicant_experience,
            $applicant->applicant_link,
            $applicant->status,
            $applicant->created_at
                ? $applicant->created_at->format('d-m-Y') : '',
        ];
    }
}

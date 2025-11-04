<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class EmployeeExport implements FromCollection, WithHeadings, WithMapping
{
    private $rowNumber;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Employee::select('id', 'name', 'email', 'phone_number', 'position', 'status')->get();
    }

    public function headings(): array
    {
        return [
            'NO',
            'Nama Lengkap',
            'Alamat Email',
            'Nomor Telepon',
            'Posisi',
            'Status',
        ];
    }

    public function map($employee): array
    {
        $phone = preg_replace('/\s+|-/', '', $employee->phone_number);

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
            $employee->name,
            $employee->email,
            $phone,
            $employee->position,
            $employee->status,
        ];
    }
}

<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;

class EmployeeExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Employee::select('id', 'name', 'email', 'phone_number', 'position', 'status')->get();
    }

    public function map($employee): array
    {
        static $no = 0;
        $no++;

        $phone = $employee->phone_number;
        if (str_starts_with($phone, '+62')) {
            $phone = '0' . substr($phone, 3);
        }

        return [
            $no,
            $employee->name,
            $employee->email,
            $phone,
            $employee->position,
            $employee->status,
        ];
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
}

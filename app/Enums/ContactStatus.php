<?php

namespace App\Enums;

enum ContactStatus: string
{
    case SudahDibalas = 'Sudah Dibalas';
    case BelumDibalas =  'Belum Dibalas';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

<?php

namespace App\Enums;

enum JobStatus: string
{
    case Active = 'Active';
    case NonActive = 'Non-Active';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

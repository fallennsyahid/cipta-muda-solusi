<?php

namespace App\Enums;

enum PartnerTypes: string
{
    case FoodBeverage = 'Food & Beverage';
    case Teknologi = 'Teknologi';
    case Pendidikan = 'Pendidikan';
    case Retail = 'Retail';
    case Keuangan = 'Keuangan';
    case Kesehatan = 'Kesehatan';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

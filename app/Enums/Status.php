<?php

namespace App\Enums;

enum Status: string
{
    case Active = 'Active';
    case NonActive = 'Non-Active';
    case Pending = 'Pending';

    case Published = 'Published';
    case UnPublished = 'Un-Published';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function onlyActiveNonActive(): array
    {
        return array_filter(self::cases(), fn($status) => in_array($status, [self::Active, self::NonActive]));
    }

    public static function onlyPublishedUnPublished(): array
    {
        return array_filter(self::cases(), fn($status) => in_array($status, [self::Published, self::UnPublished, self::Pending]));
    }
}

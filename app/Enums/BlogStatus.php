<?php

namespace App\Enums;

enum BlogStatus: string
{
    case ReadyToPublish = 'Ready To Publish';
    case Published = 'Published';
    case Archived = 'Archived';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

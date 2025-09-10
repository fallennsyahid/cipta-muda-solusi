<?php

namespace App\Enums;

enum CategoryPortfolio: string
{
    case WebDevelopment = 'Web Development';
    case SoftwareDevelopment = 'Software Development';
    case ITSolution = 'IT Solution';
    case DataCenter = 'Data Center';
    case SalesMarketing = 'Sales & Marketing';
    case EventOrganizer = 'Event Organizer';
    case ITOperationMain = 'IT Operation & Maintenance';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

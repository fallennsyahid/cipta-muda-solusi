<?php

namespace App\Enums;

enum Status: string
{
    case Active = 'Active';
    case NonActive = 'Non-Active';
    case Pending = 'Pending';

    case Published = 'Published';
    case UnPublished = 'Un-Published';

    case SudahDijawab = 'Sudah Dijawab';
    case BelumDijawab = 'Belum Dijawab';

    case Diterima = 'Diterima';
    case Ditolak = 'Ditolak';

    // All Values
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    // Only Active and NonActive
    public static function onlyActiveNonActive(): array
    {
        return array_filter(self::cases(), fn($status) => in_array($status, [self::Active, self::NonActive]));
    }

    // Only Published and UnPublished
    public static function onlyPublishedUnPublished(): array
    {
        return array_filter(self::cases(), fn($status) => in_array($status, [self::Published, self::UnPublished, self::Pending]));
    }

    // Only SudahDijawab and BelumDijawab
    public static function onlySudahDijawabBelumDijawab(): array
    {
        return array_filter(self::cases(), fn($status) => in_array($status, [self::SudahDijawab, self::BelumDijawab]));
    }

    // Only Diterima, Ditolak, and Pending
    public static function request(): array
    {
        return array_filter(self::cases(), fn($status) => in_array($status, [self::Diterima, self::Ditolak, self::Pending]));
    }
}

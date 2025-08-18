<?php

namespace App\Enums;

enum JobType: string
{
    case FullTime = 'full-time';
    case PartTime = 'part-time';
    case Internship = 'internship';
    case Freelance = 'freelance';
}

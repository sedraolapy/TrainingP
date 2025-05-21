<?php

namespace App\Enums;

enum TrainerStatus: string
{
    case AvailableFullTime = 'متاح طوال الأسبوع';
    case AvailableWeekends = 'متاح فقط في أيام العطل';
    case TemporarilyUnavailable = 'غير متاح مؤقتًا';
}

<?php

namespace App\Enums;

enum CommittedTo: string
{
    case Employees = 'موظفين';
    case Contractors = 'متعاقدين';
}
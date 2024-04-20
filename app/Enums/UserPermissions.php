<?php

namespace App\Enums;

enum UserPermissions: string
{
    case DEFAULTUSER = 'default users';
    case STAFF_TO_MANAGEUSERS = 'manage users';
    case MANAGESTAFF = 'manage all staff';
    case MANAGESYSTEM = 'manage system';
}

<?php

namespace App\Enums;

enum UserRoles: string
{
    case USER = 'user';
    case STAFF = 'staff';
    case ADMIN = 'admin';
    case SUPERADMIN = 'super admin';
}

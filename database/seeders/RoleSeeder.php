<?php

namespace Database\Seeders;

use App\Enums\Permissions;
use App\Enums\Roles;
use App\Enums\UserPermissions;
use App\Enums\UserRoles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Role::create([
            'name' => UserRoles::USER,
        ]);

        $staff = Role::create([
            'name' => UserRoles::STAFF,
        ]);
        $admin = Role::create([
            'name' => UserRoles::ADMIN,
        ]);
        $superadmin = Role::create([
            'name' => UserRoles::SUPERADMIN,
        ]);

        $default_user = Permission::create([
            'name' => UserPermissions::DEFAULTUSER,
        ]);
        $manage_users = Permission::create([
            'name' => UserPermissions::STAFF_TO_MANAGEUSERS,
        ]);

        $manage_staff = Permission::create([
            'name' => UserPermissions::MANAGESTAFF,
        ]);

        $manage_system = Permission::create([
            'name' => UserPermissions::MANAGESYSTEM,
        ]);

        $staff_permissions = [
            $default_user,
            $manage_users,
        ];

        $admin_permissions = [
            $default_user,
            $manage_users,
            $manage_staff
        ];

        $superadmin_permissions = [
            $default_user,
            $manage_users,
            $manage_staff,
            $manage_system
        ];

        $user->givePermissionTo($default_user);
        $staff->syncPermissions($staff_permissions);
        $admin->syncPermissions($admin_permissions);
        $superadmin->syncPermissions($superadmin_permissions);
    }
}

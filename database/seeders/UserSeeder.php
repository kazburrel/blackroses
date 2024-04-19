<?php

namespace Database\Seeders;

use App\Enums\UserPermissions;
use App\Enums\UserRoles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $uuid = Str::uuid();
        $user = \App\Models\User::create([
            'uuid' => $uuid,
            'fname' => 'Black roses',
            'lname' => 'support',
            'email' => 'obi@blackrosessupport.co.uk',
            'remember_token' => Str::random(10),
            'password' => Hash::make('1234567890'),
            'email_verified_at' => now()
        ]);
        $user->each(function ($user) {
            $user->assignRole(UserRoles::USER);
            $user->givePermissionTo(UserPermissions::DEFAULTUSER);
        });
    }
}

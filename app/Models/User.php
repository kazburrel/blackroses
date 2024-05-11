<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\UserPermissions;
use App\Enums\UserRoles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected function getDefaultGuardName(): string
    {
        return 'web';
    }
    // protected $guard_name = 'web';
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
        'phone',
        'avatar',
        'country',
        'languages',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected static function booted()
    {
        static::created(function (User $user) {
            $user->assignRole(UserRoles::USER);
            $user->givePermissionTo(UserPermissions::DEFAULTUSER);
        });
    }
}

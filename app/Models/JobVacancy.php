<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class JobVacancy extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'creator_id',
        'title',
        'due_date',
        'description',
        'responsibility',
        'requirement',
        'environment',
        'schedule',
        'benefits',
        'location',
        'postcode',
        'type',
        'pay_rate',
        'salary',
        'contact',
        'is_listed',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'schedule' => 'array',
        'type' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saved(function ($model) {
            Cache::forget('job_vacancies');
        });

        static::deleted(function ($model) {
            Cache::forget('job_vacancies');
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'creator_id', 'uuid');
    }
}

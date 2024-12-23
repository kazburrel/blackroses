<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobApplication extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'vaccancy_id',
        'fullname',
        'email',
        'phone',
        'cv',
        'location',
        'country',
        'right_to_work',
        'dl',
        'is_approved',
        'is_rejected',
    ];

    public function vacancy()
    {
        return $this->belongsTo(JobVacancy::class, 'vaccancy_id', 'uuid');
    }
}

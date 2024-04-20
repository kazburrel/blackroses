<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobVacancy extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

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
        'responsibilty',
        'requirement',
        'environment',
        'schedule',
        'benefits',
        'location',
        'postcode',
        'type',
        'right_to_work',
        'dl',
        'salary',
        'contact',
        'is_listed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'creator_id', 'uuid');
    }
}

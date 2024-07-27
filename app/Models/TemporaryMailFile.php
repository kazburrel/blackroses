<?php

namespace App\Models;

use Illuminate\Contracts\Mail\Attachable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Attachment;

class TemporaryMailFile extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['filename', 'filepath', 'mime_type'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserClassWatchTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'class_id',
        'year',
        'month',
        'watch_minutes',
    ];
}

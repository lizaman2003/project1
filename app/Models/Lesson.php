<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'time_start',
        'number_cabinet',
        'lesson_name',
        'teacher',
        'places',
        'time',
        'id_level'
    ];
    protected $casts = [
        'time' => 'datetime',
    ];
}

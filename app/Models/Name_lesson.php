<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Name_lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'files_lesson',
        'id_user',
        'id_level'
    ];
}

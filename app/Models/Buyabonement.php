<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyabonement extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_abonement',
        'status',
        'abonement_expiration'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'abonement_expiration'=>'datetime'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonement extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'discount',
        'old_price'
    ];
            

}
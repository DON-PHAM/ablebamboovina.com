<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'company',
        'slogan',
        'tax',
        'email',
        'phone',
        'address',
        'facebook',
        'tiktok',
        'intagram',
        'kakaotalk'

    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'slug',
        'code',
        'discount',
        'price',
        'userid',
        'quantity',
        'count',
        'status',
        'image'
    ];

    public function images()
    {
        return $this->hasMany(EventImage::class,'eventid');
    }
    public function translate()
    {
        return $this->hasOne(EventTranslate::class,'eventid','id');
    }

    public function translates()
    {
        return $this->hasMany(EventTranslate::class,'eventid','id');
    }

}

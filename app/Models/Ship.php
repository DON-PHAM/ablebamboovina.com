<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model
{
    use HasFactory;
    protected $fillable = ['price','status','price_free','code'];
    public function translate()
    {
        return $this->hasOne(ShipTranslate::class,'shipid','id');
    }

    public function translates()
    {
        return $this->hasMany(ShipTranslate::class,'shipid','id');
    }
}

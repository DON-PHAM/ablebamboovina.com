<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['image','status'];
    public function translates()
    {
        return $this->hasMany(AboutTranslate::class,'aboutid','id');
    }
    public function translate()
    {
        return $this->hasOne(AboutTranslate::class,'aboutid','id');
    }
}

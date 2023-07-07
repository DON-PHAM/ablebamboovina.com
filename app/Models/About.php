<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = ['image'];
    public function translates()
    {
        return $this->hasMany(ProductTranslate::class,'aboutid','id');
    }
    public function translate()
    {
        return $this->hasOne(ProductTranslate::class,'aboutid','id');
    }
}

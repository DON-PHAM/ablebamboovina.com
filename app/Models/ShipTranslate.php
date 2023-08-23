<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipTranslate extends Model
{
    use HasFactory;
    protected $table = 'ship_translates';
    protected $fillable = ['name','shipid','languageid'];
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'eventid',
        'image'
    ];

    public function Event(){
        return $this->belongsTo(Event::class,'eventid','id');
    }
}

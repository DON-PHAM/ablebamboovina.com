<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventTranslate extends Model
{
    use HasFactory;
    protected $fillable = [
        'eventid',
        'languageid',
        'name',
        'description',
        'content',
        'metakeyword'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}

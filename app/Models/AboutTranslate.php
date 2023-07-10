<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTranslate extends Model
{
    use HasFactory;
    protected  $fillable = [
        'languageid',
        'aboutid',
        'title',
        'contents',
        'description'
    ];
    public function about()
    {
        return $this->belongsTo(About::class);
    }
}

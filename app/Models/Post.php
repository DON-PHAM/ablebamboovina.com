<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'categoryid',
        'image',
        'slug',
        'hot',
        'status'
    ];

    public function category()
    {
        $locale = session()->get('locale') ?? App::getLocale();
        return $this->belongsTo(PostTranslate::class,'categoryid','postid')
            ->where('languageid',$locale);
    }

    public function translates()
    {
        return $this->hasMany(PostTranslate::class,'postid','id');
    }
    public function translate()
    {
        return $this->hasOne(PostTranslate::class,'postid','id');
    }
}

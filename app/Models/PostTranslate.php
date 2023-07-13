<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTranslate extends Model
{
    use HasFactory;
    protected $fillable = [
        'postid',
        'languageid',
        'name',
        'description',
        'content',
        'metakeyword'
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

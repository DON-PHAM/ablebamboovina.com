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
        'categoryid',
        'branchid',
        'userid',
        'quantity',
        'count',
        'status',
        'image',
        'hot'
    ];

    public function images()
    {
        return $this->hasMany(EventImage::class,'productid');
    }
    public function translate()
    {
        return $this->hasOne(EventTranslate::class,'productid','id');
    }

    public function translates()
    {
        return $this->hasMany(EventTranslate::class,'productid','id');
    }

    public function category()
    {
        $locale = session()->get('locale') ?? App::getLocale();
        return $this->belongsTo(ProductCategoryTranslate::class,'categoryid','productcategoryid')
            ->where('languageid',$locale);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class,'branchid');
    }
}

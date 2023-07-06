<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Product extends Model
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
        return $this->hasMany(ProductImage::class,'productid');
    }
    public function translate()
    {
        return $this->hasOne(ProductTranslate::class,'productid','id');
    }

    public function translates()
    {
        return $this->hasMany(ProductTranslate::class,'productid','id');
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

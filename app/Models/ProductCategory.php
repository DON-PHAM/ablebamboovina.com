<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = [
      'slug','status','image','typeid','parentid','banner'
    ];
    public function products()
    {
        return $this->hasMany(Product::class,'categoryid','id');
    }

    public function product()
    {
        return $this->hasOne(Product::class,'categoryid','id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class,'categoryid','id');
    }

    public function translates()
    {
        return $this->hasMany(ProductCategoryTranslate::class,'productcategoryid','id');
    }

    public function translate()
    {
        return $this->hasOne(ProductCategoryTranslate::class,'productcategoryid','id');
    }
}

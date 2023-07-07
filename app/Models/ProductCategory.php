<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = [
      'slug','status','image','typeid'
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function translates()
    {
        return $this->hasMany(ProductCategoryTranslate::class,'productcategoryid','id');
    }
}

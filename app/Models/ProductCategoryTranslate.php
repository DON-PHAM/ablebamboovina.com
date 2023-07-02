<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategoryTranslate extends Model
{
    use HasFactory;
    protected $fillable = ['name','languageid','productcategoryid','description','keyword'];
}

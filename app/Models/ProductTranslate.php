<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTranslate extends Model
{
    use HasFactory;
    protected $table = 'product_translates';
    protected $fillable = [
        'productid','languageid','name','description','content','metakeyword'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

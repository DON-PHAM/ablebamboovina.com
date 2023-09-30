<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ["orderid","productid","quantity","price","total"];
    public $timestamps = false;
    public function product() {
        return $this->hasOne(ProductTranslate::class,"productid","productid");
    }
}

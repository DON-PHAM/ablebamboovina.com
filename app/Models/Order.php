<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customerid','id');
    }
    public function orderDetails() {
        return $this->hasMany(OrderDetail::class,"orderid","id");
    }

    public function ship() {
        return $this->belongsTo(Ship::class,"shipper","id");
    }

    public function shipTranslate() {
        return $this->belongsTo(ShipTranslate::class,"shipper","shipid");
    }
}

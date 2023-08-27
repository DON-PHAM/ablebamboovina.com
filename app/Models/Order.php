<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ["customerid","discount","orderdate","status","payment","note","totalmoney","shipper","shippingstatus"];
    public $timestamps = false;
    public function customer()
    {
        return $this->belongsTo(Customer::class,'id','customerid')->first();
    }
    public function orderDetails() {
        return $this->hasMany(OrderDetail::class,"orderid","id")->get();
    }
}

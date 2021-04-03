<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table ='order_detail';
    public function product()
    {
        return $this->belongsTo(Product::class,'od_product_id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class,'od_order_id');
    }
}

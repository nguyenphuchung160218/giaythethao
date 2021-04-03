<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table ='orders';
    protected $guarded=['*'];
    const STATUS_DONE = 1;
    const STATUS_DEFAULT = 0;
    const TYPE = 1;
   
    public function user()
    {
        return $this->belongsTo(User::class,'o_user_id');
    }
}

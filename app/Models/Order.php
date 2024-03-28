<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_price',
        'payment_method',
        'shopping_address',
        'consumer_id',
    ];

    public function Order_detail(){
        return $this->hasMany(Order_detail::class);
        
    }

    public function User(){
        return $this->belongsTo(User::class);
        
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_location',
        'quantity',
        'weight',
        'price',
        'product_id',
        'produceruser_id',
    
    ];

    public function Detallepedido(){
        return $this->hasMany(Order_detail::class);
        
    }

    public function Assessment(){
        return $this->hasMany(Assessment::class);
        
    }

}

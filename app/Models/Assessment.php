<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment_ad',
        'producer_detail_id',
        'user_id',
    ];


    public function Producer_detail(){
        return $this->hasOne(Producer_detail::class);
        
    }
}

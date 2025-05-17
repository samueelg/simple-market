<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function OrderItems(){
        return $this->hasMany(OrderItem::class);
    }
}
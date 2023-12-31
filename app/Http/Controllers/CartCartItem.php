<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = ['cart_id', 'product_id', 'price', 'quantity', 'total'];

    public function cart() {
        return $this->belongsTo('App\Models\Cart');
    }

    public function product() {
        return $this->belongsTo('App\Models\Product');
    }
}

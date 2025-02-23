<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'category_id', 'name', 'description', 'slug', 'price', 'srp', 'photo', 'date_view', 'counter'
    ];

    public function reduceStock($quantity) {
        if ($this->counter >= $quantity) {
            $this->decrement('counter', $quantity);
            return true;
        }
        return false;
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function details()
    {
        return $this->hasMany(Details::class, 'product_id');
    }
    
}

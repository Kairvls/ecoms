<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    use HasFactory;
    
    protected $table = 'details';
    protected $fillable = ['sales_id', 'product_id', 'quantity'];

    public function sales()
    {
        return $this->belongsTo(Sales::class, 'sales_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    
}

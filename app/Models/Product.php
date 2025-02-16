<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'description', 'slug', 'price', 'photo', 'date_view', 'counter'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

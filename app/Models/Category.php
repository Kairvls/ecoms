<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // ✅ Add this!

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $fillable = ['name', 'description'];
    public $timestamps = true;

    protected static function boot()
    {
        parent::boot();

        static::deleted(function ($category) {
            DB::statement("SET @new_id = 0;");
            DB::statement("UPDATE category SET id = (@new_id := @new_id + 1) ORDER BY id;"); // ✅ Fix table name
        });
    }

    public function product()
{
    return $this->belongsTo(Product::class, 'product_id');
}

public function sales()
{
    return $this->belongsTo(Sales::class, 'sales_id');
}
    
}

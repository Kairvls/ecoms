<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sales extends Model
{
    use HasFactory;
    
    protected $table = 'sales';
    protected $fillable = ['user_id','payment_method', 'pay_id', 'sales_date',  'status'];

    // Relationship: A sale has many details (order items)
    public function details()
    {
        return $this->hasMany(Details::class, 'sales_id');
    }

    // Relationship: A sale belongs to a user (the customer)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

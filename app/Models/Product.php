<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'photo', 'price', 'quantity', 'variants', 'category_id',
    ];

    protected $casts = [
        'variants' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

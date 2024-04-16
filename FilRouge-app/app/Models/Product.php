<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'time',
        'price',
        'product_nbr',
        'description',
        'image',
        'category',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category');
    }


}


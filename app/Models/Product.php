<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Review;
use App\Models\Order_detail;
use App\Models\Favorite;
use App\Models\Product_image;

class Product extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'price',
        'price_discount',
        'decription',
        'count_review',
    ];

    public function categorie()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(Order_detail::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function rates()
    {
        return $this->hasMany(Rate::class);
    }

    public function productImages()
    {
        return $this->hasMany(Product_image::class);
    }
}

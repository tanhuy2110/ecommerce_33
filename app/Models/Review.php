<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Like_review;
use App\Models\User;

class Review extends Model
{
    protected $fillable = [
        'parent_id',
        'product_id',
        'user_id',
        'review',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function likeReview()
    {
        return $this->hasMany(Like_review::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

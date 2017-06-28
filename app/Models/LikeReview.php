<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LikeReview extends Model
{
    protected $fillable = [
        'review_id',
        'user_id',
    ];
}

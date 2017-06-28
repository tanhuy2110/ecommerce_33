<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order_detail;
use App\Models\User;

class Order extends Model
{
    protected $fillable = [
        'status',
        'user_id',
        'shipping_address',
        'shipping_method',
        'shiped_track',
        'sum_total',
    ];

    public function orderDetails()
    {
        return $this->hasMany(Order_detail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

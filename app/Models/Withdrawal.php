<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'missionary_id',
        'user_reward',
        'amount',
        'payment_method',
        'phone_number',
        'status',
    ];

    public function missionary()
    {
        return $this->belongsTo(Missionary::class);
    }

    public function userReward()
    {
        return $this->belongsTo(UserReward::class);
    }
}


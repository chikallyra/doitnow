<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Missionary extends Model
{
    use HasFactory;

    public function missions(){
        return $this->belongsToMany(Mission::class, 'user_missions')->withPivot('joined_at', 'mission_complete_at')->withTimestamps();
    }

    public function rewards(){
        return $this->belongsToMany(Reward::class, 'user_rewards')->withPivot('reward_status', 'claimed_at')->withTimestamps();
    }

    protected $guarded = ['id'];
}

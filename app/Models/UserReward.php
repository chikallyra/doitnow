<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserReward extends Model
{
    use HasFactory;

    public function missionary(){
        return $this->belongsTo(Missionary::class);
    }

    public function reward(){
        return $this->BelongsTo(Reward::class);
    }

    protected $guarded = ['id'];
}

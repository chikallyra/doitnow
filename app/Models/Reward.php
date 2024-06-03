<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reward extends Model
{
    use HasFactory;

    public function missionary(){
        return $this->belongsToMany(Missionary::class, 'user_rewards')
                    ->withPivot('reward_status', 'claimed_at')
                    ->withTimestamps();
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    protected $fillable = ['reward'];
}

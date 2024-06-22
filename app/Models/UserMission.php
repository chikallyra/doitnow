<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMission extends Model
{
    use HasFactory;
    
    public function missionary(){
        return $this->belongsTo(Missionary::class);
    }

    public function mission(){
        return $this->BelongsTo(Mission::class);
    }

    public function notifications(){
        return $this->hasMany(Notification::class);
    }

    public function withdrawal()
    {
        return $this->hasOne(Withdrawal::class, 'user_mission_id');
    }

    protected $guarded = ['id'];

    protected $casts = [
        'joined_at' => 'datetime',
        'mission_complete_at' => 'datetime',
        'steps_completed' => 'array',
    ];
}

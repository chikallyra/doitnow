<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Notification extends Model
{
    use HasFactory;

    public function mission(){
        return $this->belongsTo(Mission::class);
    }

    public function userMission(){
        return $this->belongsTo(UserMission::class);
    }
    
    public function userReward(){
        return $this->belongsTo(UserReward::class);
    }

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(MissionCategory::class);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function reward(){
        return $this->belongsTo(Reward::class);
    }

    public function missionary()  {
        return $this->belongsToMany(Missionary::class, 'user_missions')->withPivot('joined_at', 'mission_complete_at')->withTimestamps();
    }

    protected $guarded = ['id'];
}

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

    protected $guarded = ['id'];
}

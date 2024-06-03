<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionCategory extends Model
{
    use HasFactory;
    
    public function missions() {
        return $this->hasMany(Mission::class);
    }

    protected $guard = ['id'];
}

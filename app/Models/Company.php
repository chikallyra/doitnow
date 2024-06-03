<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function mission() {
        return $this->hasMany(Mission::class);
    }

    public function reward() {
        return $this->hasMany(Reward::class);
    }

    public function users(){
        return $this->belongsToMany(Company::class, 'company_user')->withPivot('role')->withTimestamps();
    }

    protected $guarded = ['id'];
}

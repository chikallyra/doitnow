<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $guard = ['id'];
    //for commit
    public function blogs() {
        return $this->hasMany(Blog::class);
    }
}

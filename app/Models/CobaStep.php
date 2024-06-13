<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CobaStep extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'steps' => 'array'
    ];
}

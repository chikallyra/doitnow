<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CompanyUser extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'user_id',
        'role',
    ];

    
}

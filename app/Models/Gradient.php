<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gradient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'gradient_name',
        'colors',
        'angle',
    ];

    protected $casts = [
        'colors' => 'string',
    ];
}

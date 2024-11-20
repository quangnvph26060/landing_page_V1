<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionEight extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'images',
        'slides',
    ];

    protected $casts = [
        'images' => 'array',
        'slides' => 'array',
    ];
}

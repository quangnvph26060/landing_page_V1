<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionTwo extends Model
{
    use HasFactory;

    protected $fillable = [
        'titles',
        'contents',
        'images',
        'descriptions',
    ];

    protected $casts = [
        'titles' => 'array',
        'contents' => 'array',
        'images' => 'array',
        'descriptions' => 'array',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionThree extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'blocks',
        'contents'
    ];
    protected $casts = ['blocks' => 'array', 'contents' => 'array'];
}

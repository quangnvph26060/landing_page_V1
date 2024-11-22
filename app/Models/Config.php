<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'logo',
        'favicon',

        'branch',
        'address',
        'hotline',
        'email',
        'website',
        'copyright',
        'script',

        'title',
        'map',

        'title_seo',
        'description_seo',
        'keywords_seo'
    ];
}

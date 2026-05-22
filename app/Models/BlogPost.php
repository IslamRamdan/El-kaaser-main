<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //
    protected $fillable = [
        'title_ar',
        'title_en',
        'content_ar',
        'content_en',
        'image',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'tittle',
        'gender',
        'actor',
        'director',
        'qualification',
        'url_img',
        'url_trailer',
        'url_video',
        'quality',
        'duration',
        'year',
        'comments'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
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
        'year',
        'comments'
    ];

    public function seasons()
    {
        return $this->hasMany('App\Season');
    }
}

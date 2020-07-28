<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [ 
        'season_id',
        'tittle',
        'url_img',
        'url_chapter',
        'time'
    ];
    
    public function season()
    {
        return $this->belongsTo('App\Season');
    }
}

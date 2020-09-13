<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function getRouteKeyName()
    {
        return 'title_abbr';
    }
    
    public function books()
    {
        return $this->belongsToMany('App\Book')->withTimestamps();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function getRouteKeyName()
    {
        return 'title_abbr';
    }

    public function getWidthAttribute()
    {
        return ($this->order * 15 > 100) ? 100 : $this->order * 15;
    }
    
    public function books()
    {
        return $this->belongsToMany('App\Book')->withTimestamps();
    }
}

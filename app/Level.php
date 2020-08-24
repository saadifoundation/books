<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function books()
    {
        return $this->belongsToMany('App\Book');
    }
}

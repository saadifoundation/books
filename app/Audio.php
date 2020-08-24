<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}

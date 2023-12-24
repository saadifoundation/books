<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function getRouteKeyName()
    {
        return 'title_abbr';
    }

    public function books()
    {
        return $this->belongsToMany(Book::class)->withTimestamps();
    }
}

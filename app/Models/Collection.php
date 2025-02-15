<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Collection extends Model
{
    public function getRouteKeyName()
    {
        return 'title_abbr';
    }

    public function books(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}

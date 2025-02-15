<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    public function getRouteKeyName(): string
    {
        return 'title_abbr';
    }

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class)->withTimestamps();
    }
}

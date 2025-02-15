<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Level extends Model
{
    public function getRouteKeyName(): string
    {
        return 'title_abbr';
    }

    public function getWidthAttribute(): int
    {
        return (int) (
            ($this->order * 15 > 100)
                ? 100
                : $this->order * 15
        );
    }

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class)->withTimestamps();
    }
}

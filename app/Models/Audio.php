<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Audio extends Model
{
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
